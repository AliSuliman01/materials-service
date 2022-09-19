<?php


namespace App\Http\Controllers\Materials\Specialisations\Specialisations;


use App\Domain\Materials\Materials\Actions\DestroyMaterialAction;
use App\Domain\Materials\Materials\Actions\StoreMaterialAction;
use App\Domain\Materials\Materials\Actions\UpdateMaterialAction;
use App\Domain\Materials\Materials\DTO\MaterialDTO;
use App\Domain\Materials\Materials\Model\Material;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;
use App\Domain\Materials\Specialisations\Specialisations\Actions\StoreSpecialisationAction;
use App\Domain\Materials\Specialisations\Specialisations\Actions\DestroySpecialisationAction;
use App\Domain\Materials\Specialisations\Specialisations\Actions\UpdateSpecialisationAction;
use App\Domain\Materials\Specialisations\Specialisations\DTO\SpecialisationDTO;
use App\Http\Requests\Materials\Specialisations\Specialisations\StoreSpecialisationRequest;
use App\Http\Requests\Materials\Specialisations\Specialisations\UpdateSpecialisationRequest;
use App\Http\ViewModels\Materials\Specialisations\Specialisations\GetSpecialisationVM;
use App\Http\ViewModels\Materials\Specialisations\Specialisations\GetAllSpecialisationsVM;
use Illuminate\Support\Facades\DB;

class SpecialisationController extends Controller
{
    public function __construct()
    {
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store', 'update', 'destroy']);
    }

    public function index()
    {

        return response()->json(Response::success((new GetAllSpecialisationsVM())->toArray()));
    }

    public function show(Specialisation $specialisation)
    {

        return response()->json(Response::success((new GetSpecialisationVM($specialisation))->toArray()));
    }

    public function store(StoreSpecialisationRequest $request)
    {

        $data = $request->validated();
        $specialisation = DB::transaction(function () use ($data) {

            $material = StoreMaterialAction::execute(MaterialDTO::fromRequest($data));
            $material->updateRelation('translations', $data['translations'] ?? []);
            $material->updateRelation('images', $data['images'] ?? []);
            $material->categories()->sync($data['categories'] ?? []);

            $specialisation = StoreSpecialisationAction::execute(SpecialisationDTO::fromRequest($data)->setId($material->id));
            $specialisation->courses()->sync($data['courses'] ?? []);
            return $specialisation;
        });

            return response()->json(Response::success((new GetSpecialisationVM($specialisation))->toArray()));
        }

    public function update(Specialisation $specialisation, UpdateSpecialisationRequest $request)
    {
        $data = $request->validated();
        $specialisation = DB::transaction(function () use ($specialisation, $data) {

            $material = UpdateMaterialAction::execute($specialisation->material, MaterialDTO::fromRequest($data));
            if (isset($data['translations']))
                $material->updateRelation('translations', $data['translations']);
            if (isset($data['images']))
                $material->updateRelation('images', $data['images'] ?? []);
            if (isset($data['categories']))
                $material->categories()->sync($data['categories'] ?? []);

            $specialisation = UpdateSpecialisationAction::execute($specialisation, SpecialisationDTO::fromRequest($data));
            if (isset($data['courses']))
                $specialisation->courses()->sync($data['courses'] ?? []);
            return $specialisation;
        });
        return response()->json(Response::success((new GetSpecialisationVM($specialisation))->toArray()));
    }

    public function destroy(Specialisation $specialisation)
    {

        DB::transaction(function () use ($specialisation) {
            DestroyMaterialAction::execute($specialisation->material);
            DestroySpecialisationAction::execute($specialisation);
        });
        return response()->json(Response::success());
    }

}

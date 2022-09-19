<?php


namespace App\Http\Controllers\Materials\MaterialTranslation;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;
use App\Domain\Materials\MaterialTranslation\Actions\StoreMaterialTranslationAction;
use App\Domain\Materials\MaterialTranslation\Actions\DestroyMaterialTranslationAction;
use App\Domain\Materials\MaterialTranslation\Actions\UpdateMaterialTranslationAction;
use App\Domain\Materials\MaterialTranslation\DTO\MaterialTranslationDTO;
use App\Http\Requests\Materials\MaterialTranslation\StoreMaterialTranslationRequest;
use App\Http\Requests\Materials\MaterialTranslation\UpdateMaterialTranslationRequest;
use App\Http\ViewModels\Materials\MaterialTranslation\GetMaterialTranslationVM;
use App\Http\ViewModels\Materials\MaterialTranslation\GetAllMaterialTranslationsVM;

class MaterialTranslationController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllMaterialTranslationsVM())->toArray()));
    }

    public function show(MaterialTranslation $materialTranslation){

        return response()->json(Response::success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function store(StoreMaterialTranslationRequest $request){

        $data = $request->validated() ;

        $materialTranslationDTO = MaterialTranslationDTO::fromRequest($data);

        $materialTranslation = StoreMaterialTranslationAction::execute($materialTranslationDTO);

        return response()->json(Response::success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function update(MaterialTranslation $materialTranslation, UpdateMaterialTranslationRequest $request){

        $data = $request->validated() ;

        $materialTranslationDTO = MaterialTranslationDTO::fromRequest($data);

        $materialTranslation = UpdateMaterialTranslationAction::execute($materialTranslation, $materialTranslationDTO);

        return response()->json(Response::success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function destroy(MaterialTranslation $materialTranslation){

        return response()->json(Response::success(DestroyMaterialTranslationAction::execute($materialTranslation)));
    }

}

<?php


namespace App\Http\Controllers\Materials\MaterialTranslation;

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
    public function index(){

        return response()->json(success((new GetAllMaterialTranslationsVM())->toArray()));
    }

    public function show(MaterialTranslation $materialTranslation){

        return response()->json(success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function store(StoreMaterialTranslationRequest $request){

        $data = $request->validated() ;

        $materialTranslationDTO = MaterialTranslationDTO::fromRequest($data);

        $materialTranslation = StoreMaterialTranslationAction::execute($materialTranslationDTO);

        return response()->json(success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function update(MaterialTranslation $materialTranslation, UpdateMaterialTranslationRequest $request){

        $data = $request->validated() ;

        $materialTranslationDTO = MaterialTranslationDTO::fromRequest($data);

        $materialTranslation = UpdateMaterialTranslationAction::execute($materialTranslation, $materialTranslationDTO);

        return response()->json(success((new GetMaterialTranslationVM($materialTranslation))->toArray()));
    }

    public function destroy(MaterialTranslation $materialTranslation){

        return response()->json(success(DestroyMaterialTranslationAction::execute($materialTranslation)));
    }

}

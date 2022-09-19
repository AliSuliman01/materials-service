<?php


namespace App\Http\Controllers\Materials\MaterialStatus\MaterialStatusTranslation;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions\StoreMaterialStatusTranslationAction;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions\DestroyMaterialStatusTranslationAction;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions\UpdateMaterialStatusTranslationAction;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\DTO\MaterialStatusTranslationDTO;
use App\Http\Requests\Materials\MaterialStatus\MaterialStatusTranslation\StoreMaterialStatusTranslationRequest;
use App\Http\Requests\Materials\MaterialStatus\MaterialStatusTranslation\UpdateMaterialStatusTranslationRequest;
use App\Http\ViewModels\Materials\MaterialStatus\MaterialStatusTranslation\GetMaterialStatusTranslationVM;
use App\Http\ViewModels\Materials\MaterialStatus\MaterialStatusTranslation\GetAllMaterialStatusTranslationsVM;

class MaterialStatusTranslationController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllMaterialStatusTranslationsVM())->toArray()));
    }

    public function show(MaterialStatusTranslation $materialStatusTranslation){

        return response()->json(Response::success((new GetMaterialStatusTranslationVM($materialStatusTranslation))->toArray()));
    }

    public function store(StoreMaterialStatusTranslationRequest $request){

        $data = $request->validated() ;

        $materialStatusTranslationDTO = MaterialStatusTranslationDTO::fromRequest($data);

        $materialStatusTranslation = StoreMaterialStatusTranslationAction::execute($materialStatusTranslationDTO);

        return response()->json(Response::success((new GetMaterialStatusTranslationVM($materialStatusTranslation))->toArray()));
    }

    public function update(MaterialStatusTranslation $materialStatusTranslation, UpdateMaterialStatusTranslationRequest $request){

        $data = $request->validated() ;

        $materialStatusTranslationDTO = MaterialStatusTranslationDTO::fromRequest($data);

        $materialStatusTranslation = UpdateMaterialStatusTranslationAction::execute($materialStatusTranslation, $materialStatusTranslationDTO);

        return response()->json(Response::success((new GetMaterialStatusTranslationVM($materialStatusTranslation))->toArray()));
    }

    public function destroy(MaterialStatusTranslation $materialStatusTranslation){

        return response()->json(Response::success(DestroyMaterialStatusTranslationAction::execute($materialStatusTranslation)));
    }

}

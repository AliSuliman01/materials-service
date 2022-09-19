<?php


namespace App\Http\Controllers\Materials\MaterialStatus\MaterialStatus;



use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Actions\StoreMaterialStatusAction;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Actions\DestroyMaterialStatusAction;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Actions\UpdateMaterialStatusAction;
use App\Domain\Materials\MaterialStatus\MaterialStatus\DTO\MaterialStatusDTO;
use App\Http\Requests\Materials\MaterialStatus\MaterialStatus\StoreMaterialStatusRequest;
use App\Http\Requests\Materials\MaterialStatus\MaterialStatus\UpdateMaterialStatusRequest;
use App\Http\ViewModels\Materials\MaterialStatus\MaterialStatus\GetMaterialStatusVM;
use App\Http\ViewModels\Materials\MaterialStatus\MaterialStatus\GetAllMaterialStatussVM;

class MaterialStatusController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllMaterialStatussVM())->toArray()));
    }

    public function show(MaterialStatus $materialStatus){

        return response()->json(success((new GetMaterialStatusVM($materialStatus))->toArray()));
    }

    public function store(StoreMaterialStatusRequest $request){

        $data = $request->validated() ;

        $materialStatusDTO = MaterialStatusDTO::fromRequest($data);

        $materialStatus = StoreMaterialStatusAction::execute($materialStatusDTO);

        return response()->json(success((new GetMaterialStatusVM($materialStatus))->toArray()));
    }

    public function update(MaterialStatus $materialStatus, UpdateMaterialStatusRequest $request){

        $data = $request->validated() ;

        $materialStatusDTO = MaterialStatusDTO::fromRequest($data);

        $materialStatus = UpdateMaterialStatusAction::execute($materialStatus, $materialStatusDTO);

        return response()->json(success((new GetMaterialStatusVM($materialStatus))->toArray()));
    }

    public function destroy(MaterialStatus $materialStatus){

        return response()->json(success(DestroyMaterialStatusAction::execute($materialStatus)));
    }

}

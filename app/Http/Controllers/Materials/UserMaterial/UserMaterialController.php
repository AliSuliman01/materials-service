<?php


namespace App\Http\Controllers\Materials\UserMaterial;



use App\Http\Controllers\Controller;
use App\Domain\Materials\UserMaterial\Model\UserMaterial;
use App\Domain\Materials\UserMaterial\Actions\StoreUserMaterialAction;
use App\Domain\Materials\UserMaterial\Actions\DestroyUserMaterialAction;
use App\Domain\Materials\UserMaterial\Actions\UpdateUserMaterialAction;
use App\Domain\Materials\UserMaterial\DTO\UserMaterialDTO;
use App\Http\Requests\Materials\UserMaterial\StoreUserMaterialRequest;
use App\Http\Requests\Materials\UserMaterial\UpdateUserMaterialRequest;
use App\Http\ViewModels\Materials\UserMaterial\GetUserMaterialVM;
use App\Http\ViewModels\Materials\UserMaterial\GetAllUserMaterialsVM;

class UserMaterialController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllUserMaterialsVM())->toArray()));
    }

    public function show(UserMaterial $userMaterial){

        return response()->json(success((new GetUserMaterialVM($userMaterial))->toArray()));
    }

    public function store(StoreUserMaterialRequest $request){

        $data = $request->validated() ;

        $userMaterialDTO = UserMaterialDTO::fromRequest($data);

        $userMaterial = StoreUserMaterialAction::execute($userMaterialDTO);

        return response()->json(success((new GetUserMaterialVM($userMaterial))->toArray()));
    }

    public function update(UserMaterial $userMaterial, UpdateUserMaterialRequest $request){

        $data = $request->validated() ;

        $userMaterialDTO = UserMaterialDTO::fromRequest($data);

        $userMaterial = UpdateUserMaterialAction::execute($userMaterial, $userMaterialDTO);

        return response()->json(success((new GetUserMaterialVM($userMaterial))->toArray()));
    }

    public function destroy(UserMaterial $userMaterial){

        return response()->json(success(DestroyUserMaterialAction::execute($userMaterial)));
    }

}

<?php


namespace App\Http\Controllers\Materials\MaterialCategory;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use App\Domain\Materials\MaterialCategory\Actions\StoreMaterialCategoryAction;
use App\Domain\Materials\MaterialCategory\Actions\DestroyMaterialCategoryAction;
use App\Domain\Materials\MaterialCategory\Actions\UpdateMaterialCategoryAction;
use App\Domain\Materials\MaterialCategory\DTO\MaterialCategoryDTO;
use App\Http\Requests\Materials\MaterialCategory\StoreMaterialCategoryRequest;
use App\Http\Requests\Materials\MaterialCategory\UpdateMaterialCategoryRequest;
use App\Http\ViewModels\Materials\MaterialCategory\GetMaterialCategoryVM;
use App\Http\ViewModels\Materials\MaterialCategory\GetAllMaterialCategorysVM;

class MaterialCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllMaterialCategorysVM())->toArray()));
    }

    public function show(MaterialCategory $materialCategory){

        return response()->json(Response::success((new GetMaterialCategoryVM($materialCategory))->toArray()));
    }

    public function store(StoreMaterialCategoryRequest $request){

        $data = $request->validated() ;

        $materialCategoryDTO = MaterialCategoryDTO::fromRequest($data);

        $materialCategory = StoreMaterialCategoryAction::execute($materialCategoryDTO);

        return response()->json(Response::success((new GetMaterialCategoryVM($materialCategory))->toArray()));
    }

    public function update(MaterialCategory $materialCategory, UpdateMaterialCategoryRequest $request){

        $data = $request->validated() ;

        $materialCategoryDTO = MaterialCategoryDTO::fromRequest($data);

        $materialCategory = UpdateMaterialCategoryAction::execute($materialCategory, $materialCategoryDTO);

        return response()->json(Response::success((new GetMaterialCategoryVM($materialCategory))->toArray()));
    }

    public function destroy(MaterialCategory $materialCategory){

        return response()->json(Response::success(DestroyMaterialCategoryAction::execute($materialCategory)));
    }

}

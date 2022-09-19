<?php


namespace App\Http\Controllers\Materials\MaterialImages\MaterialImageCategory;



use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions\StoreMaterialImageCategoryAction;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions\DestroyMaterialImageCategoryAction;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions\UpdateMaterialImageCategoryAction;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\DTO\MaterialImageCategoryDTO;
use App\Http\Requests\Materials\MaterialImages\MaterialImageCategory\StoreMaterialImageCategoryRequest;
use App\Http\Requests\Materials\MaterialImages\MaterialImageCategory\UpdateMaterialImageCategoryRequest;
use App\Http\ViewModels\Materials\MaterialImages\MaterialImageCategory\GetMaterialImageCategoryVM;
use App\Http\ViewModels\Materials\MaterialImages\MaterialImageCategory\GetAllMaterialImageCategorysVM;

class MaterialImageCategoryController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllMaterialImageCategorysVM())->toArray()));
    }

    public function show(MaterialImageCategory $materialImageCategory){

        return response()->json(success((new GetMaterialImageCategoryVM($materialImageCategory))->toArray()));
    }

    public function store(StoreMaterialImageCategoryRequest $request){

        $data = $request->validated() ;

        $materialImageCategoryDTO = MaterialImageCategoryDTO::fromRequest($data);

        $materialImageCategory = StoreMaterialImageCategoryAction::execute($materialImageCategoryDTO);

        return response()->json(success((new GetMaterialImageCategoryVM($materialImageCategory))->toArray()));
    }

    public function update(MaterialImageCategory $materialImageCategory, UpdateMaterialImageCategoryRequest $request){

        $data = $request->validated() ;

        $materialImageCategoryDTO = MaterialImageCategoryDTO::fromRequest($data);

        $materialImageCategory = UpdateMaterialImageCategoryAction::execute($materialImageCategory, $materialImageCategoryDTO);

        return response()->json(success((new GetMaterialImageCategoryVM($materialImageCategory))->toArray()));
    }

    public function destroy(MaterialImageCategory $materialImageCategory){

        return response()->json(success(DestroyMaterialImageCategoryAction::execute($materialImageCategory)));
    }

}

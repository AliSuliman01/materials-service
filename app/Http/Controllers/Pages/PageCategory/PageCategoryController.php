<?php


namespace App\Http\Controllers\Pages\PageCategory;



use App\Http\Controllers\Controller;
use App\Domain\Pages\PageCategory\Model\PageCategory;
use App\Domain\Pages\PageCategory\Actions\StorePageCategoryAction;
use App\Domain\Pages\PageCategory\Actions\DestroyPageCategoryAction;
use App\Domain\Pages\PageCategory\Actions\UpdatePageCategoryAction;
use App\Domain\Pages\PageCategory\DTO\PageCategoryDTO;
use App\Http\Requests\Pages\PageCategory\StorePageCategoryRequest;
use App\Http\Requests\Pages\PageCategory\UpdatePageCategoryRequest;
use App\Http\ViewModels\Pages\PageCategory\GetPageCategoryVM;
use App\Http\ViewModels\Pages\PageCategory\GetAllPageCategorysVM;

class PageCategoryController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllPageCategorysVM())->toArray()));
    }

    public function show(PageCategory $pageCategory){

        return response()->json(success((new GetPageCategoryVM($pageCategory))->toArray()));
    }

    public function store(StorePageCategoryRequest $request){

        $data = $request->validated() ;

        $pageCategoryDTO = PageCategoryDTO::fromRequest($data);

        $pageCategory = StorePageCategoryAction::execute($pageCategoryDTO);

        return response()->json(success((new GetPageCategoryVM($pageCategory))->toArray()));
    }

    public function update(PageCategory $pageCategory, UpdatePageCategoryRequest $request){

        $data = $request->validated() ;

        $pageCategoryDTO = PageCategoryDTO::fromRequest($data);

        $pageCategory = UpdatePageCategoryAction::execute($pageCategory, $pageCategoryDTO);

        return response()->json(success((new GetPageCategoryVM($pageCategory))->toArray()));
    }

    public function destroy(PageCategory $pageCategory){

        return response()->json(success(DestroyPageCategoryAction::execute($pageCategory)));
    }

}

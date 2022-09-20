<?php


namespace App\Http\Controllers\Pages;


use App\Domain\Categories\Categories\Model\Category;
use App\Http\Controllers\Controller;
use App\Domain\Pages\Model\Page;
use App\Domain\Pages\Actions\StorePageAction;
use App\Domain\Pages\Actions\DestroyPageAction;
use App\Domain\Pages\Actions\UpdatePageAction;
use App\Domain\Pages\DTO\PageDTO;
use App\Http\Requests\Pages\StorePageRequest;
use App\Http\Requests\Pages\UpdatePageRequest;
use App\Http\ViewModels\Pages\GetPageVM;
use App\Http\ViewModels\Pages\GetAllPagesVM;

class PageController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllPagesVM())->toArray()));
    }

    public function home_page()
    {
        return Category::with(['featured_materials','recommended_materials'])->whereHas('parent',function($query){
            $query->whereRelation('translations','name','=','navbar');
        })->get();
    }
    public function show(Page $page){

        return response()->json((new GetPageVM($page))->toArray());
    }

    public function store(StorePageRequest $request){

        $data = $request->validated() ;

        $pageDTO = PageDTO::fromRequest($data);

        $page = StorePageAction::execute($pageDTO);

        $page->categories()->sync($data['categories'] ?? []);

        return response()->json(success((new GetPageVM($page))->toArray()));
    }

    public function update(Page $page, UpdatePageRequest $request){

        $data = $request->validated() ;

        $pageDTO = PageDTO::fromRequest($data);

        $page = UpdatePageAction::execute($page, $pageDTO);

        $page->categories()->sync($data['categories'] ?? []);

        return response()->json(success((new GetPageVM($page))->toArray()));
    }

    public function destroy(Page $page){

        return response()->json(success(DestroyPageAction::execute($page)));
    }

}

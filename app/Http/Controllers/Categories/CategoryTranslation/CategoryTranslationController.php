<?php


namespace App\Http\Controllers\Categories\CategoryTranslation;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Categories\CategoryTranslation\Actions\CategoryTranslationStoreAction;
use App\Domain\Categories\CategoryTranslation\Actions\CategoryTranslationDestroyAction;
use App\Domain\Categories\CategoryTranslation\Actions\CategoryTranslationUpdateAction;
use App\Domain\Categories\CategoryTranslation\DTO\CategoryTranslationDTO;
use App\Http\Requests\Categories\CategoryTranslation\CategoryTranslationStoreRequest;
use App\Http\Requests\Categories\CategoryTranslation\CategoryTranslationUpdateRequest;
use App\Http\Requests\Categories\CategoryTranslation\CategoryTranslationDestroyRequest;
use App\Http\Requests\Categories\CategoryTranslation\CategoryTranslationShowRequest;
use App\Http\ViewModels\Categories\CategoryTranslation\CategoryTranslationShowVM;
use App\Http\ViewModels\Categories\CategoryTranslation\CategoryTranslationIndexVM;

class CategoryTranslationController extends Controller
{

    public function index(){

        return response()->json(Response::success((new CategoryTranslationIndexVM())->toArray()));
    }

    public function show(CategoryTranslationShowRequest $request){

        return response()->json(Response::success((new CategoryTranslationShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(CategoryTranslationStoreRequest $request){
        $data = $request->validated() ;

        $categoryTranslationDTO = CategoryTranslationDTO::fromRequest($data);

        $categoryTranslation = CategoryTranslationStoreAction::execute($categoryTranslationDTO);

        return response()->json(Response::success((new CategoryTranslationShowVM($categoryTranslation->toArray()))->toArray()));
    }

    public function update(CategoryTranslationUpdateRequest $request){
        $data = $request->validated() ;

        $categoryTranslationDTO = CategoryTranslationDTO::fromRequest($data);

        $categoryTranslation = CategoryTranslationUpdateAction::execute($categoryTranslationDTO);

        return response()->json(Response::success((new CategoryTranslationShowVM($categoryTranslation->toArray()))->toArray()));
    }

    public function destroy(CategoryTranslationDestroyRequest $request){

        return response()->json(Response::success(CategoryTranslationDestroyAction::execute(CategoryTranslationDTO::fromRequest($request->validated()))));
    }

}

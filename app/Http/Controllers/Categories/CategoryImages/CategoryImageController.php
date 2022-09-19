<?php


namespace App\Http\Controllers\Categories\CategoryImages;


use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Categories\CategoryImages\Actions\CategoryImageStoreAction;
use App\Domain\Categories\CategoryImages\Actions\CategoryImageDestroyAction;
use App\Domain\Categories\CategoryImages\Actions\CategoryImageUpdateAction;
use App\Domain\Categories\CategoryImages\DTO\CategoryImageDTO;
use App\Http\Requests\Categories\CategoryImages\CategoryImageStoreRequest;
use App\Http\Requests\Categories\CategoryImages\CategoryImageUpdateRequest;
use App\Http\Requests\Categories\CategoryImages\CategoryImageDestroyRequest;
use App\Http\Requests\Categories\CategoryImages\CategoryImageShowRequest;
use App\Http\ViewModels\Categories\CategoryImages\CategoryImageShowVM;
use App\Http\ViewModels\Categories\CategoryImages\CategoryImageIndexVM;

class CategoryImageController extends Controller
{

    public function index(){

        return response()->json(Response::success((new CategoryImageIndexVM())->toArray()));
    }

    public function show(CategoryImage $categoryImage){

        return response()->json(Response::success((new CategoryImageShowVM($categoryImage))->toArray()));
    }

    public function store(CategoryImageStoreRequest $request){
        $data = $request->validated() ;

        $categoryImageDTO = CategoryImageDTO::fromRequest($data);

        $categoryImage = CategoryImageStoreAction::execute($categoryImageDTO);

        return response()->json(Response::success((new CategoryImageShowVM($categoryImage))->toArray()));
    }

    public function update(CategoryImage $categoryImage, CategoryImageUpdateRequest $request){
        $data = $request->validated() ;

        $categoryImageDTO = CategoryImageDTO::fromRequest($data);

        $categoryImage = CategoryImageUpdateAction::execute($categoryImage, $categoryImageDTO);

        return response()->json(Response::success((new CategoryImageShowVM($categoryImage))->toArray()));
    }

    public function destroy(CategoryImage $categoryImage){

        return response()->json(Response::success(CategoryImageDestroyAction::execute($categoryImage)));
    }

}

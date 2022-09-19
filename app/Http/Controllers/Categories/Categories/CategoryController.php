<?php


namespace App\Http\Controllers\Categories\Categories;


use App\Domain\Categories\Categories\Model\Category;
use App\Http\Controllers\Controller;
use App\Domain\Categories\Categories\Actions\CategoryStoreAction;
use App\Domain\Categories\Categories\Actions\CategoryDestroyAction;
use App\Domain\Categories\Categories\Actions\CategoryUpdateAction;
use App\Domain\Categories\Categories\DTO\CategoryDTO;
use App\Http\Requests\Categories\Categories\CategoryStoreRequest;
use App\Http\Requests\Categories\Categories\CategoryUpdateRequest;
use App\Http\ViewModels\Categories\Categories\CategoryShowVM;
use App\Http\ViewModels\Categories\Categories\CategoryIndexVM;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {

        return response()->json(success((new CategoryIndexVM())->toArray()));
    }

    public function show(Category $category)
    {

        return response()->json(success((new CategoryShowVM($category))->toArray()));
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        $categoryDTO = CategoryDTO::fromRequest($data);

        $category = DB::transaction(function () use ($data, $categoryDTO) {

            $category = CategoryStoreAction::execute($categoryDTO);

            $category->updateRelation('translations', $data['translations'] ?? []);

            $category->updateRelation('images', $data['images'] ?? []);

            if (isset($data['pages']))
                $category->pages()->sync($data['pages']);

            return $category;
        });
        return response()->json(success((new CategoryShowVM($category))->toArray()));
    }

    public function update(Category $category, CategoryUpdateRequest $request)
    {
        $data = $request->validated();
        $categoryDTO = CategoryDTO::fromRequest($request->validated());

        $category = DB::transaction(function () use ($category, $categoryDTO, $data) {

            $category = CategoryUpdateAction::execute($category, $categoryDTO);

            if (isset($data['translations']))
                $category->updateRelation('translations', $data['translations']);
            if (isset($data['images']))
                $category->updateRelation('images', $data['images']);
            if (isset($data['pages']))
                $category->pages()->sync($data['pages']);
            return $category;
        });

        return response()->json(success((new CategoryShowVM($category))->toArray()));
    }

    public function destroy(Category $category)
    {

        return response()->json(success(CategoryDestroyAction::execute($category)));
    }

}

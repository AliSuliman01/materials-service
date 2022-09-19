<?php


namespace App\Http\Controllers\Materials\Materials;


use App\Http\Controllers\Controller;
use App\Domain\Materials\Materials\Model\Material;
use App\Http\Requests\Materials\Materials\SearchMaterialRequest;
use App\Http\Requests\Materials\Materials\StoreMaterialRequest;
use App\Http\Requests\Materials\Materials\UpdateMaterialRequest;
use App\Http\ViewModels\Materials\Materials\MyMaterialVM;
use App\Http\ViewModels\Materials\Materials\SearchMaterialVM;

class MaterialController extends Controller
{
    public function search(SearchMaterialRequest $request)
    {
        return response()->json(success((new SearchMaterialVM($request->json('search_string')))->toArray()));
    }
    public function my_materials()
    {
        return response()->json(success((new MyMaterialVM())->toArray()));
    }

    public function index()
    {
        return \response()->json(success(Material::with(['translation'])->get()));
    }
    public function show(Material $material)
    {
        return \response()->json(success($material->with(['specialization.courses','translation'])->get()));
    }
    public function store(StoreMaterialRequest $request)
    {
        return \response()->json(success(Material::query()->create($request->validated())));
    }
    public function update(Material $material, UpdateMaterialRequest $request)
    {
        return \response()->json(success($material->update($request->validated())));
    }
    public function destroy(Material $material)
    {
        return \response()->json(success($material->delete()));
    }
}

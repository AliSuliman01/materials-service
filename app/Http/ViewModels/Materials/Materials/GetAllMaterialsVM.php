<?php


namespace App\Http\ViewModels\Materials\Materials;

use App\Domain\Materials\Materials\Model\Material;
use Illuminate\Contracts\Support\Arrayable;
use Yajra\DataTables\Facades\DataTables;

class GetAllMaterialsVM implements Arrayable
{
    public function toArray()
    {
        return DataTables::eloquent(Material::with(['level.translations']))->toJson();
    }
}

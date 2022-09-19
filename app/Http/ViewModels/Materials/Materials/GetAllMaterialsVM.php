<?php


namespace App\Http\ViewModels\Materials\Materials;

use App\Domain\Materials\Materials\Model\Material;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialsVM implements Arrayable
{
    public function toArray()
    {
        return Material::query()->get();
    }
}

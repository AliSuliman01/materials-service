<?php


namespace App\Http\ViewModels\Materials\MaterialCategory;

use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialCategorysVM implements Arrayable
{
    public function toArray()
    {
        return MaterialCategory::query()->get();
    }
}

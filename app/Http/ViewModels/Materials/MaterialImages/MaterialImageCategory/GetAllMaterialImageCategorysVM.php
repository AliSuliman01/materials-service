<?php


namespace App\Http\ViewModels\Materials\MaterialImages\MaterialImageCategory;

use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialImageCategorysVM implements Arrayable
{
    public function toArray()
    {
        return MaterialImageCategory::query()->get();
    }
}

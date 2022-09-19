<?php


namespace App\Http\ViewModels\Materials\MaterialImages;

use App\Domain\Materials\MaterialImages\Model\MaterialImage;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialImagesVM implements Arrayable
{
    public function toArray()
    {
        return MaterialImage::query()->get();
    }
}

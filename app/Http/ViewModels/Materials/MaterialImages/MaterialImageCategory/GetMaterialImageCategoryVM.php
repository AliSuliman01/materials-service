<?php


namespace App\Http\ViewModels\Materials\MaterialImages\MaterialImageCategory;

use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialImageCategoryVM implements Arrayable
{

    private $material_image_category;

    public function __construct($material_image_category)
    {
        $this->material_image_category = $material_image_category;
    }

    public function toArray()
    {
        return  $this->material_image_category;
    }
}

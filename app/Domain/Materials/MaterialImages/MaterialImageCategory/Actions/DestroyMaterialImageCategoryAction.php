<?php


namespace App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions;


use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;

class DestroyMaterialImageCategoryAction
{
    public static function execute(
        MaterialImageCategory $material_image_category
    ){
        $material_image_category->delete();
        return $material_image_category;
    }
}

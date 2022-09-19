<?php


namespace App\Domain\Materials\MaterialCategory\Actions;


use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;

class DestroyMaterialCategoryAction
{
    public static function execute(
        MaterialCategory $material_category
    ){
        $material_category->delete();
        return $material_category;
    }
}

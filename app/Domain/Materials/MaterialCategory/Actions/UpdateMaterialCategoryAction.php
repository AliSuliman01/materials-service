<?php

namespace App\Domain\Materials\MaterialCategory\Actions;

use App\Domain\Materials\MaterialCategory\DTO\MaterialCategoryDTO;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;

class UpdateMaterialCategoryAction
{

    public static function execute(
        MaterialCategory $material_category,MaterialCategoryDTO $material_categoryDTO
    ){
        $material_category->update(array_null_filter($material_categoryDTO->toArray()));
        return $material_category;
    }
}

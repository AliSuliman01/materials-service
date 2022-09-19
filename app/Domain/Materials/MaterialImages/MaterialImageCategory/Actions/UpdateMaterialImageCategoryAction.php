<?php

namespace App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions;

use App\Domain\Materials\MaterialImages\MaterialImageCategory\DTO\MaterialImageCategoryDTO;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;

class UpdateMaterialImageCategoryAction
{

    public static function execute(
        MaterialImageCategory $material_image_category,MaterialImageCategoryDTO $material_image_categoryDTO
    ){
        $material_image_category->update(array_null_filter($material_image_categoryDTO->toArray()));
        return $material_image_category;
    }
}

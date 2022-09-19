<?php


namespace App\Domain\Materials\MaterialImages\MaterialImageCategory\Actions;


use App\Domain\Materials\MaterialImages\MaterialImageCategory\DTO\MaterialImageCategoryDTO;
use App\Domain\Materials\MaterialImages\MaterialImageCategory\Model\MaterialImageCategory;

class StoreMaterialImageCategoryAction
{
    public static function execute(
    MaterialImageCategoryDTO $material_image_categoryDTO
    ){

        return MaterialImageCategory::create(array_null_filter($material_image_categoryDTO->toArray()));
    }
}

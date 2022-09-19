<?php


namespace App\Domain\Materials\MaterialCategory\Actions;


use App\Domain\Materials\MaterialCategory\DTO\MaterialCategoryDTO;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;

class StoreMaterialCategoryAction
{
    public static function execute(
    MaterialCategoryDTO $material_categoryDTO
    ){

        return MaterialCategory::create(array_null_filter($material_categoryDTO->toArray()));
    }
}

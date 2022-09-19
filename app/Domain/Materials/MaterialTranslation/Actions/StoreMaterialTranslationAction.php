<?php


namespace App\Domain\Materials\MaterialTranslation\Actions;


use App\Domain\Materials\MaterialTranslation\DTO\MaterialTranslationDTO;
use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;

class StoreMaterialTranslationAction
{
    public static function execute(
    MaterialTranslationDTO $material_translationDTO
    ){

        return MaterialTranslation::create(array_null_filter($material_translationDTO->toArray()));
    }
}

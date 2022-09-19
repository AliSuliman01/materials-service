<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions;


use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\DTO\MaterialStatusTranslationDTO;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;

class StoreMaterialStatusTranslationAction
{
    public static function execute(
    MaterialStatusTranslationDTO $material_status_translationDTO
    ){

        return MaterialStatusTranslation::create(array_null_filter($material_status_translationDTO->toArray()));
    }
}

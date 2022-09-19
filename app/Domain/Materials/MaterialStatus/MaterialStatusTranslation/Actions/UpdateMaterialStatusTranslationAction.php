<?php

namespace App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions;

use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\DTO\MaterialStatusTranslationDTO;
use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;

class UpdateMaterialStatusTranslationAction
{

    public static function execute(
        MaterialStatusTranslation $material_status_translation,MaterialStatusTranslationDTO $material_status_translationDTO
    ){
        $material_status_translation->update(array_null_filter($material_status_translationDTO->toArray()));
        return $material_status_translation;
    }
}

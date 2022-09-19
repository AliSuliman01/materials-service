<?php

namespace App\Domain\Materials\MaterialTranslation\Actions;

use App\Domain\Materials\MaterialTranslation\DTO\MaterialTranslationDTO;
use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;

class UpdateMaterialTranslationAction
{

    public static function execute(
        MaterialTranslation $material_translation,MaterialTranslationDTO $material_translationDTO
    ){
        $material_translation->update(array_null_filter($material_translationDTO->toArray()));
        return $material_translation;
    }
}

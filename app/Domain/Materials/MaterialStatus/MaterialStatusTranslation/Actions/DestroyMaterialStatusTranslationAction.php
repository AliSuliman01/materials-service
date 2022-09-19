<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Actions;


use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;

class DestroyMaterialStatusTranslationAction
{
    public static function execute(
        MaterialStatusTranslation $material_status_translation
    ){
        $material_status_translation->delete();
        return $material_status_translation;
    }
}

<?php


namespace App\Domain\Materials\MaterialTranslation\Actions;


use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;

class DestroyMaterialTranslationAction
{
    public static function execute(
        MaterialTranslation $material_translation
    ){
        $material_translation->delete();
        return $material_translation;
    }
}

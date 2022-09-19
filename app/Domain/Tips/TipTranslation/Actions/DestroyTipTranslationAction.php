<?php


namespace App\Domain\Tips\TipTranslation\Actions;


use App\Domain\Tips\TipTranslation\Model\TipTranslation;

class DestroyTipTranslationAction
{
    public static function execute(
        TipTranslation $tip_translation
    ){
        $tip_translation->delete();
        return $tip_translation;
    }
}

<?php

namespace App\Domain\Tips\TipTranslation\Actions;

use App\Domain\Tips\TipTranslation\DTO\TipTranslationDTO;
use App\Domain\Tips\TipTranslation\Model\TipTranslation;

class UpdateTipTranslationAction
{

    public static function execute(
        TipTranslation $tip_translation,TipTranslationDTO $tip_translationDTO
    ){
        $tip_translation->update(array_null_filter($tip_translationDTO->toArray()));
        return $tip_translation;
    }
}

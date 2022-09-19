<?php


namespace App\Domain\Tips\TipTranslation\Actions;


use App\Domain\Tips\TipTranslation\DTO\TipTranslationDTO;
use App\Domain\Tips\TipTranslation\Model\TipTranslation;

class StoreTipTranslationAction
{
    public static function execute(
    TipTranslationDTO $tip_translationDTO
    ){

        return TipTranslation::create(array_null_filter($tip_translationDTO->toArray()));
    }
}

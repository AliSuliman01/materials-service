<?php


namespace App\Domain\Levels\LevelTranslation\Actions;


use App\Domain\Levels\LevelTranslation\DTO\LevelTranslationDTO;
use App\Domain\Levels\LevelTranslation\Model\LevelTranslation;

class StoreLevelTranslationAction
{
    public static function execute(
    LevelTranslationDTO $level_translationDTO
    ){

        return LevelTranslation::create(array_null_filter($level_translationDTO->toArray()));
    }
}

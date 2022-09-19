<?php

namespace App\Domain\Levels\LevelTranslation\Actions;

use App\Domain\Levels\LevelTranslation\DTO\LevelTranslationDTO;
use App\Domain\Levels\LevelTranslation\Model\LevelTranslation;

class UpdateLevelTranslationAction
{

    public static function execute(
        LevelTranslation $level_translation,LevelTranslationDTO $level_translationDTO
    ){
        $level_translation->update(array_null_filter($level_translationDTO->toArray()));
        return $level_translation;
    }
}

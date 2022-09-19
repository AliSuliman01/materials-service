<?php


namespace App\Domain\Levels\LevelTranslation\Actions;


use App\Domain\Levels\LevelTranslation\Model\LevelTranslation;

class DestroyLevelTranslationAction
{
    public static function execute(
        LevelTranslation $level_translation
    ){
        $level_translation->delete();
        return $level_translation;
    }
}

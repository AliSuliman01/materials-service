<?php


namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions;


use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;

class DestroyCompetitionTypeTranslationAction
{
    public static function execute(
        CompetitionTypeTranslation $competition_type_translation
    ){
        $competition_type_translation->delete();
        return $competition_type_translation;
    }
}

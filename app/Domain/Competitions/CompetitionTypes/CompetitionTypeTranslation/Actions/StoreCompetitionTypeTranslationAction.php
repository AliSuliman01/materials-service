<?php


namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions;


use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\DTO\CompetitionTypeTranslationDTO;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;

class StoreCompetitionTypeTranslationAction
{
    public static function execute(
    CompetitionTypeTranslationDTO $competition_type_translationDTO
    ){

        return CompetitionTypeTranslation::create(array_null_filter($competition_type_translationDTO->toArray()));
    }
}

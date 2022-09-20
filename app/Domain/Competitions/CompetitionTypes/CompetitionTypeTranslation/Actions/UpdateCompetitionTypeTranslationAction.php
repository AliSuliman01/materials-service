<?php

namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\DTO\CompetitionTypeTranslationDTO;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;

class UpdateCompetitionTypeTranslationAction
{

    public static function execute(
        CompetitionTypeTranslation $competition_type_translation,CompetitionTypeTranslationDTO $competition_type_translationDTO
    ){
        $competition_type_translation->update(array_null_filter($competition_type_translationDTO->toArray()));
        return $competition_type_translation;
    }
}

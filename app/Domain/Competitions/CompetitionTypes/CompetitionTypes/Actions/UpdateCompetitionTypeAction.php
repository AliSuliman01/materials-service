<?php

namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\DTO\CompetitionTypeDTO;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;

class UpdateCompetitionTypeAction
{

    public static function execute(
        CompetitionType $competition_type,CompetitionTypeDTO $competition_typeDTO
    ){
        $competition_type->update(array_null_filter($competition_typeDTO->toArray()));
        return $competition_type;
    }
}

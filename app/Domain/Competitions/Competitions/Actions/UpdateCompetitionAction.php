<?php

namespace App\Domain\Competitions\Competitions\Actions;

use App\Domain\Competitions\Competitions\DTO\CompetitionDTO;
use App\Domain\Competitions\Competitions\Model\Competition;

class UpdateCompetitionAction
{

    public static function execute(
        Competition $competition,CompetitionDTO $competitionDTO
    ){
        $competition->update(array_null_filter($competitionDTO->toArray()));
        return $competition;
    }
}

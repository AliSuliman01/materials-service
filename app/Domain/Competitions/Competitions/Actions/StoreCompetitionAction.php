<?php


namespace App\Domain\Competitions\Competitions\Actions;


use App\Domain\Competitions\Competitions\DTO\CompetitionDTO;
use App\Domain\Competitions\Competitions\Model\Competition;

class StoreCompetitionAction
{
    public static function execute(
    CompetitionDTO $competitionDTO
    ){

        return Competition::create(array_null_filter($competitionDTO->toArray()));
    }
}

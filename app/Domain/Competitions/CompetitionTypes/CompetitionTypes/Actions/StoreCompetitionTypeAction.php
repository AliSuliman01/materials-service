<?php


namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions;


use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\DTO\CompetitionTypeDTO;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;

class StoreCompetitionTypeAction
{
    public static function execute(
    CompetitionTypeDTO $competition_typeDTO
    ){

        return CompetitionType::create(array_null_filter($competition_typeDTO->toArray()));
    }
}

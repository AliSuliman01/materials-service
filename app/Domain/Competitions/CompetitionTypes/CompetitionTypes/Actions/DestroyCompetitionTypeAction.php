<?php


namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions;


use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;

class DestroyCompetitionTypeAction
{
    public static function execute(
        CompetitionType $competition_type
    ){
        $competition_type->delete();
        return $competition_type;
    }
}

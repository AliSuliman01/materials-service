<?php


namespace App\Domain\Competitions\Competitions\Actions;


use App\Domain\Competitions\Competitions\Model\Competition;

class DestroyCompetitionAction
{
    public static function execute(
        Competition $competition
    ){
        $competition->delete();
        return $competition;
    }
}

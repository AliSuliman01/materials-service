<?php


namespace App\Domain\Competitions\CompetitionMember\Actions;


use App\Domain\Competitions\CompetitionMember\DTO\CompetitionMemberDTO;
use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;

class StoreCompetitionMemberAction
{
    public static function execute(
    CompetitionMemberDTO $competition_memberDTO
    ){

        return CompetitionMember::create(array_null_filter($competition_memberDTO->toArray()));
    }
}

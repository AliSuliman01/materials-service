<?php


namespace App\Domain\Competitions\CompetitionMember\Actions;


use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;

class DestroyCompetitionMemberAction
{
    public static function execute(
        CompetitionMember $competition_member
    ){
        $competition_member->delete();
        return $competition_member;
    }
}

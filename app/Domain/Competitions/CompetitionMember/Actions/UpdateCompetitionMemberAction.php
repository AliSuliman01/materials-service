<?php

namespace App\Domain\Competitions\CompetitionMember\Actions;

use App\Domain\Competitions\CompetitionMember\DTO\CompetitionMemberDTO;
use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;

class UpdateCompetitionMemberAction
{

    public static function execute(
        CompetitionMember $competition_member,CompetitionMemberDTO $competition_memberDTO
    ){
        $competition_member->update(array_null_filter($competition_memberDTO->toArray()));
        return $competition_member;
    }
}

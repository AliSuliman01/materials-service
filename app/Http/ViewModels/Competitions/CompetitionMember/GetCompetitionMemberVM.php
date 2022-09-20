<?php


namespace App\Http\ViewModels\Competitions\CompetitionMember;

use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;
use Illuminate\Contracts\Support\Arrayable;


class GetCompetitionMemberVM implements Arrayable
{

    private $competition_member;

    public function __construct($competition_member)
    {
        $this->competition_member = $competition_member;
    }

    public function toArray()
    {
        return  $this->competition_member;
    }
}

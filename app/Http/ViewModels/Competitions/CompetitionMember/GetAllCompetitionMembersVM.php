<?php


namespace App\Http\ViewModels\Competitions\CompetitionMember;

use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCompetitionMembersVM implements Arrayable
{
    public function toArray()
    {
        return CompetitionMember::query()->get();
    }
}

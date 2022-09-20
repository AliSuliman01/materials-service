<?php


namespace App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypes;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCompetitionTypesVM implements Arrayable
{
    public function toArray()
    {
        return CompetitionType::query()->get();
    }
}

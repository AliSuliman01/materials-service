<?php


namespace App\Http\ViewModels\Competitions\CompetitionCategory;

use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCompetitionCategorysVM implements Arrayable
{
    public function toArray()
    {
        return CompetitionCategory::query()->get();
    }
}

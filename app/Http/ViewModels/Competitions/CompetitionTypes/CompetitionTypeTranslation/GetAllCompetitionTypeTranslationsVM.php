<?php


namespace App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypeTranslation;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCompetitionTypeTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return CompetitionTypeTranslation::query()->get();
    }
}

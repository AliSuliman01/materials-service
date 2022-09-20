<?php


namespace App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypeTranslation;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetCompetitionTypeTranslationVM implements Arrayable
{

    private $competition_type_translation;

    public function __construct($competition_type_translation)
    {
        $this->competition_type_translation = $competition_type_translation;
    }

    public function toArray()
    {
        return  $this->competition_type_translation;
    }
}

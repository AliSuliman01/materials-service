<?php


namespace App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypes;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;
use Illuminate\Contracts\Support\Arrayable;


class GetCompetitionTypeVM implements Arrayable
{

    private $competition_type;

    public function __construct($competition_type)
    {
        $this->competition_type = $competition_type;
    }

    public function toArray()
    {
        return  $this->competition_type;
    }
}

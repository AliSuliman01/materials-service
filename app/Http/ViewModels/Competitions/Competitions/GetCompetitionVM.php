<?php


namespace App\Http\ViewModels\Competitions\Competitions;

use App\Domain\Competitions\Competitions\Model\Competition;
use Illuminate\Contracts\Support\Arrayable;


class GetCompetitionVM implements Arrayable
{

    private $competition;

    public function __construct($competition)
    {
        $this->competition = $competition;
    }

    public function toArray()
    {
        return  $this->competition;
    }
}

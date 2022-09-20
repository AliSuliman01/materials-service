<?php


namespace App\Http\ViewModels\Competitions\CompetitionCategory;

use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetCompetitionCategoryVM implements Arrayable
{

    private $competition_category;

    public function __construct($competition_category)
    {
        $this->competition_category = $competition_category;
    }

    public function toArray()
    {
        return  $this->competition_category;
    }
}

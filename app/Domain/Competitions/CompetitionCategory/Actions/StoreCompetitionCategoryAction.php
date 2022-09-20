<?php


namespace App\Domain\Competitions\CompetitionCategory\Actions;


use App\Domain\Competitions\CompetitionCategory\DTO\CompetitionCategoryDTO;
use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;

class StoreCompetitionCategoryAction
{
    public static function execute(
    CompetitionCategoryDTO $competition_categoryDTO
    ){

        return CompetitionCategory::create(array_null_filter($competition_categoryDTO->toArray()));
    }
}

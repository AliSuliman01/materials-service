<?php


namespace App\Domain\Competitions\CompetitionCategory\Actions;


use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;

class DestroyCompetitionCategoryAction
{
    public static function execute(
        CompetitionCategory $competition_category
    ){
        $competition_category->delete();
        return $competition_category;
    }
}

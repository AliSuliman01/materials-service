<?php

namespace App\Domain\Competitions\CompetitionCategory\Actions;

use App\Domain\Competitions\CompetitionCategory\DTO\CompetitionCategoryDTO;
use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;

class UpdateCompetitionCategoryAction
{

    public static function execute(
        CompetitionCategory $competition_category,CompetitionCategoryDTO $competition_categoryDTO
    ){
        $competition_category->update(array_null_filter($competition_categoryDTO->toArray()));
        return $competition_category;
    }
}

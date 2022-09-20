<?php

namespace App\Domain\Questions\QuestionCategory\Actions;

use App\Domain\Questions\QuestionCategory\DTO\QuestionCategoryDTO;
use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;

class UpdateQuestionCategoryAction
{

    public static function execute(
        QuestionCategory $question_category,QuestionCategoryDTO $question_categoryDTO
    ){
        $question_category->update(array_null_filter($question_categoryDTO->toArray()));
        return $question_category;
    }
}

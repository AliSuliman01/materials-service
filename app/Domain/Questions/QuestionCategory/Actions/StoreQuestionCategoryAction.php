<?php


namespace App\Domain\Questions\QuestionCategory\Actions;


use App\Domain\Questions\QuestionCategory\DTO\QuestionCategoryDTO;
use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;

class StoreQuestionCategoryAction
{
    public static function execute(
    QuestionCategoryDTO $question_categoryDTO
    ){

        return QuestionCategory::create(array_null_filter($question_categoryDTO->toArray()));
    }
}

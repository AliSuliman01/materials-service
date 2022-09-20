<?php


namespace App\Domain\Questions\QuestionCategory\Actions;


use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;

class DestroyQuestionCategoryAction
{
    public static function execute(
        QuestionCategory $question_category
    ){
        $question_category->delete();
        return $question_category;
    }
}

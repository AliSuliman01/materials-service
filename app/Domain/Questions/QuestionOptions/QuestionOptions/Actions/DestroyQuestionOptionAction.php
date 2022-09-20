<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptions\Actions;


use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;

class DestroyQuestionOptionAction
{
    public static function execute(
        QuestionOption $question_option
    ){
        $question_option->delete();
        return $question_option;
    }
}

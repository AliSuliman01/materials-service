<?php


namespace App\Domain\Questions\QuestionToQuestion\Actions;


use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;

class DestroyQuestionToQuestionAction
{
    public static function execute(
        QuestionToQuestion $question_to_question
    ){
        $question_to_question->delete();
        return $question_to_question;
    }
}

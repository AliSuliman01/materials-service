<?php


namespace App\Domain\Questions\Questions\Actions;


use App\Domain\Questions\Questions\Model\Question;

class DestroyQuestionAction
{
    public static function execute(
        Question $question
    ){
        $question->delete();
        return $question;
    }
}

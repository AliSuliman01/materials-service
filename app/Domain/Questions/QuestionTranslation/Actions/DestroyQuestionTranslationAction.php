<?php


namespace App\Domain\Questions\QuestionTranslation\Actions;


use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;

class DestroyQuestionTranslationAction
{
    public static function execute(
        QuestionTranslation $question_translation
    ){
        $question_translation->delete();
        return $question_translation;
    }
}

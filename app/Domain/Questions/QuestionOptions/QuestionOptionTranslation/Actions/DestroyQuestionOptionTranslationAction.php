<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions;


use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;

class DestroyQuestionOptionTranslationAction
{
    public static function execute(
        QuestionOptionTranslation $question_option_translation
    ){
        $question_option_translation->delete();
        return $question_option_translation;
    }
}

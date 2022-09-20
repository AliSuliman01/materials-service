<?php

namespace App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions;

use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\DTO\QuestionOptionTranslationDTO;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;

class UpdateQuestionOptionTranslationAction
{

    public static function execute(
        QuestionOptionTranslation $question_option_translation,QuestionOptionTranslationDTO $question_option_translationDTO
    ){
        $question_option_translation->update(array_null_filter($question_option_translationDTO->toArray()));
        return $question_option_translation;
    }
}

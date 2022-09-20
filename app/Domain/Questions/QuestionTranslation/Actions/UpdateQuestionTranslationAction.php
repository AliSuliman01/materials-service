<?php

namespace App\Domain\Questions\QuestionTranslation\Actions;

use App\Domain\Questions\QuestionTranslation\DTO\QuestionTranslationDTO;
use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;

class UpdateQuestionTranslationAction
{

    public static function execute(
        QuestionTranslation $question_translation,QuestionTranslationDTO $question_translationDTO
    ){
        $question_translation->update(array_null_filter($question_translationDTO->toArray()));
        return $question_translation;
    }
}

<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions;


use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\DTO\QuestionOptionTranslationDTO;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;

class StoreQuestionOptionTranslationAction
{
    public static function execute(
    QuestionOptionTranslationDTO $question_option_translationDTO
    ){

        return QuestionOptionTranslation::create(array_null_filter($question_option_translationDTO->toArray()));
    }
}

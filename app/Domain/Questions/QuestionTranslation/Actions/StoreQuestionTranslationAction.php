<?php


namespace App\Domain\Questions\QuestionTranslation\Actions;


use App\Domain\Questions\QuestionTranslation\DTO\QuestionTranslationDTO;
use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;

class StoreQuestionTranslationAction
{
    public static function execute(
    QuestionTranslationDTO $question_translationDTO
    ){

        return QuestionTranslation::create(array_null_filter($question_translationDTO->toArray()));
    }
}

<?php


namespace App\Domain\Questions\QuestionToQuestion\Actions;


use App\Domain\Questions\QuestionToQuestion\DTO\QuestionToQuestionDTO;
use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;

class StoreQuestionToQuestionAction
{
    public static function execute(
    QuestionToQuestionDTO $question_to_questionDTO
    ){

        return QuestionToQuestion::create(array_null_filter($question_to_questionDTO->toArray()));
    }
}

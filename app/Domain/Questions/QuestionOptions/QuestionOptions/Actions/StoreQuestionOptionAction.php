<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptions\Actions;


use App\Domain\Questions\QuestionOptions\QuestionOptions\DTO\QuestionOptionDTO;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;

class StoreQuestionOptionAction
{
    public static function execute(
    QuestionOptionDTO $question_optionDTO
    ){

        return QuestionOption::create(array_null_filter($question_optionDTO->toArray()));
    }
}

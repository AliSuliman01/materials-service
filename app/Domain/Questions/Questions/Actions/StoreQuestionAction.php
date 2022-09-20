<?php


namespace App\Domain\Questions\Questions\Actions;


use App\Domain\Questions\Questions\DTO\QuestionDTO;
use App\Domain\Questions\Questions\Model\Question;

class StoreQuestionAction
{
    public static function execute(
    QuestionDTO $questionDTO
    ){

        return Question::create(array_null_filter($questionDTO->toArray()));
    }
}

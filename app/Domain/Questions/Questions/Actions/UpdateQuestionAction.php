<?php

namespace App\Domain\Questions\Questions\Actions;

use App\Domain\Questions\Questions\DTO\QuestionDTO;
use App\Domain\Questions\Questions\Model\Question;

class UpdateQuestionAction
{

    public static function execute(
        Question $question,QuestionDTO $questionDTO
    ){
        $question->update(array_null_filter($questionDTO->toArray()));
        return $question;
    }
}

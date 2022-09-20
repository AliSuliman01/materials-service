<?php

namespace App\Domain\Questions\QuestionToQuestion\Actions;

use App\Domain\Questions\QuestionToQuestion\DTO\QuestionToQuestionDTO;
use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;

class UpdateQuestionToQuestionAction
{

    public static function execute(
        QuestionToQuestion $question_to_question,QuestionToQuestionDTO $question_to_questionDTO
    ){
        $question_to_question->update(array_null_filter($question_to_questionDTO->toArray()));
        return $question_to_question;
    }
}

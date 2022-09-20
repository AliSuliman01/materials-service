<?php

namespace App\Domain\Questions\QuestionOptions\QuestionOptions\Actions;

use App\Domain\Questions\QuestionOptions\QuestionOptions\DTO\QuestionOptionDTO;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;

class UpdateQuestionOptionAction
{

    public static function execute(
        QuestionOption $question_option,QuestionOptionDTO $question_optionDTO
    ){
        $question_option->update(array_null_filter($question_optionDTO->toArray()));
        return $question_option;
    }
}

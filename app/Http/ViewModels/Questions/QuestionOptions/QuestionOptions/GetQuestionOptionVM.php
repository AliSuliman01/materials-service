<?php


namespace App\Http\ViewModels\Questions\QuestionOptions\QuestionOptions;

use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionOptionVM implements Arrayable
{

    private $question_option;

    public function __construct($question_option)
    {
        $this->question_option = $question_option;
    }

    public function toArray()
    {
        return  $this->question_option;
    }
}

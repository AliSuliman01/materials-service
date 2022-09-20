<?php


namespace App\Http\ViewModels\Questions\QuestionToQuestion;

use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionToQuestionVM implements Arrayable
{

    private $question_to_question;

    public function __construct($question_to_question)
    {
        $this->question_to_question = $question_to_question;
    }

    public function toArray()
    {
        return  $this->question_to_question;
    }
}

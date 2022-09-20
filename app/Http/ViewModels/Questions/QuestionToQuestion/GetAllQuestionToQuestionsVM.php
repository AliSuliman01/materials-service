<?php


namespace App\Http\ViewModels\Questions\QuestionToQuestion;

use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionToQuestionsVM implements Arrayable
{
    public function toArray()
    {
        return QuestionToQuestion::query()->get();
    }
}

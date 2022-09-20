<?php


namespace App\Http\ViewModels\Questions\QuestionOptions\QuestionOptions;

use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionOptionsVM implements Arrayable
{
    public function toArray()
    {
        return QuestionOption::query()->get();
    }
}

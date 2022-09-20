<?php


namespace App\Http\ViewModels\Questions\QuestionCategory;

use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionCategorysVM implements Arrayable
{
    public function toArray()
    {
        return QuestionCategory::query()->get();
    }
}

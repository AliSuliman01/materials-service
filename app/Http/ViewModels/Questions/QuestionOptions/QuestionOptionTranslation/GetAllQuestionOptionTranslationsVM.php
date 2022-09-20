<?php


namespace App\Http\ViewModels\Questions\QuestionOptions\QuestionOptionTranslation;

use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionOptionTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return QuestionOptionTranslation::query()->get();
    }
}

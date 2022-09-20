<?php


namespace App\Http\ViewModels\Questions\QuestionTranslation;

use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return QuestionTranslation::query()->get();
    }
}

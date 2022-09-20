<?php


namespace App\Http\ViewModels\Questions\Questions;

use App\Domain\Questions\Questions\Model\Question;
use Illuminate\Contracts\Support\Arrayable;

class GetAllQuestionsVM implements Arrayable
{
    public function toArray()
    {
        return Question::query()->get();
    }
}

<?php


namespace App\Http\ViewModels\Questions\QuestionTranslation;

use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionTranslationVM implements Arrayable
{

    private $question_translation;

    public function __construct($question_translation)
    {
        $this->question_translation = $question_translation;
    }

    public function toArray()
    {
        return  $this->question_translation;
    }
}

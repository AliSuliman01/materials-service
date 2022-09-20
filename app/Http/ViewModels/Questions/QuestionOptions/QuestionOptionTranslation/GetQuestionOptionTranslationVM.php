<?php


namespace App\Http\ViewModels\Questions\QuestionOptions\QuestionOptionTranslation;

use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionOptionTranslationVM implements Arrayable
{

    private $question_option_translation;

    public function __construct($question_option_translation)
    {
        $this->question_option_translation = $question_option_translation;
    }

    public function toArray()
    {
        return  $this->question_option_translation;
    }
}

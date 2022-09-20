<?php


namespace App\Http\ViewModels\Questions\QuestionCategory;

use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionCategoryVM implements Arrayable
{

    private $question_category;

    public function __construct($question_category)
    {
        $this->question_category = $question_category;
    }

    public function toArray()
    {
        return  $this->question_category;
    }
}

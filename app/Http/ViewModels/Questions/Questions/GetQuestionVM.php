<?php


namespace App\Http\ViewModels\Questions\Questions;

use App\Domain\Questions\Questions\Model\Question;
use Illuminate\Contracts\Support\Arrayable;


class GetQuestionVM implements Arrayable
{

    private $question;

    public function __construct($question)
    {
        $this->question = $question;
    }

    public function toArray()
    {
        return  $this->question;
    }
}

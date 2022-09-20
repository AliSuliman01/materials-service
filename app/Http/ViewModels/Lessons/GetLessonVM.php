<?php


namespace App\Http\ViewModels\Lessons;

use App\Domain\Lessons\Model\Lesson;
use Illuminate\Contracts\Support\Arrayable;


class GetLessonVM implements Arrayable
{

    private $lesson;

    public function __construct($lesson)
    {
        $this->lesson = $lesson;
    }

    public function toArray()
    {
        return  $this->lesson;
    }
}

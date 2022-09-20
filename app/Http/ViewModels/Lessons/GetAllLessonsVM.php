<?php


namespace App\Http\ViewModels\Lessons;

use App\Domain\Lessons\Model\Lesson;
use Illuminate\Contracts\Support\Arrayable;

class GetAllLessonsVM implements Arrayable
{
    public function toArray()
    {
        return Lesson::query()->get();
    }
}

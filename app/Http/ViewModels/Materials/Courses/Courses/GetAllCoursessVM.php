<?php


namespace App\Http\ViewModels\Materials\Courses\Courses;

use App\Domain\Materials\Courses\Courses\Model\Course;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCoursessVM implements Arrayable
{
    public function toArray()
    {
        return Course::query()->get();
    }
}

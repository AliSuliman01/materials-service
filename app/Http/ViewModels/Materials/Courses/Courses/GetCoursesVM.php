<?php


namespace App\Http\ViewModels\Materials\Courses\Courses;

use App\Domain\Materials\Courses\Courses\Model\Course;
use Illuminate\Contracts\Support\Arrayable;


class GetCoursesVM implements Arrayable
{

    private $course;

    public function __construct($course)
    {
        $this->course = $course;
    }

    public function toArray()
    {
        return  $this->course;
    }
}

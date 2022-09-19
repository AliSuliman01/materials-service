<?php

namespace App\Domain\Materials\Courses\Courses\Actions;

use App\Domain\Materials\Courses\Courses\DTO\CoursesDTO;
use App\Domain\Materials\Courses\Courses\Model\Course;

class UpdateCoursesAction
{

    public static function execute(
        Course $course, CoursesDTO $courseDTO
    ){
        $course->update(array_null_filter($courseDTO->toArray()));
        return $course;
    }
}

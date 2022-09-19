<?php


namespace App\Domain\Materials\Courses\Courses\Actions;


use App\Domain\Materials\Courses\Courses\Model\Course;

class DestroyCoursesAction
{
    public static function execute(
        Course $course
    ){
        $course->delete();
        return $course;
    }
}

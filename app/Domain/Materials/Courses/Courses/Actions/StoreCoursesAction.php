<?php


namespace App\Domain\Materials\Courses\Courses\Actions;


use App\Domain\Materials\Courses\Courses\DTO\CoursesDTO;
use App\Domain\Materials\Courses\Courses\Model\Course;

class StoreCoursesAction
{
    public static function execute(
    CoursesDTO $courseDTO
    ){

        return Course::create(array_null_filter($courseDTO->toArray()));
    }
}

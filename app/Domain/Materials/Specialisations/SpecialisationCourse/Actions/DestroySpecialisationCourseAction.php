<?php


namespace App\Domain\Materials\Specialisations\SpecialisationCourse\Actions;


use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;

class DestroySpecialisationCourseAction
{
    public static function execute(
        SpecialisationCourse $specialisation_course
    ){
        $specialisation_course->delete();
        return $specialisation_course;
    }
}

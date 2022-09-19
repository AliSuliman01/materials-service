<?php

namespace App\Domain\Materials\Specialisations\SpecialisationCourse\Actions;

use App\Domain\Materials\Specialisations\SpecialisationCourse\DTO\SpecialisationCourseDTO;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;

class UpdateSpecialisationCourseAction
{

    public static function execute(
        SpecialisationCourse $specialisation_course,SpecialisationCourseDTO $specialisation_courseDTO
    ){
        $specialisation_course->update(array_null_filter($specialisation_courseDTO->toArray()));
        return $specialisation_course;
    }
}

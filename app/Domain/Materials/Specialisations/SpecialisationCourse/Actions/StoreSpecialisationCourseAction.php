<?php


namespace App\Domain\Materials\Specialisations\SpecialisationCourse\Actions;


use App\Domain\Materials\Specialisations\SpecialisationCourse\DTO\SpecialisationCourseDTO;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;

class StoreSpecialisationCourseAction
{
    public static function execute(
    SpecialisationCourseDTO $specialisation_courseDTO
    ){

        return SpecialisationCourse::create(array_null_filter($specialisation_courseDTO->toArray()));
    }
}

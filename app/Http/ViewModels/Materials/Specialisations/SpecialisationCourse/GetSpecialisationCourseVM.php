<?php


namespace App\Http\ViewModels\Materials\Specialisations\SpecialisationCourse;

use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;
use Illuminate\Contracts\Support\Arrayable;


class GetSpecialisationCourseVM implements Arrayable
{

    private $specialisation_course;

    public function __construct($specialisation_course)
    {
        $this->specialisation_course = $specialisation_course;
    }

    public function toArray()
    {
        return  $this->specialisation_course;
    }
}

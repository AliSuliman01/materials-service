<?php


namespace App\Http\ViewModels\Materials\Specialisations\SpecialisationCourse;

use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;
use Illuminate\Contracts\Support\Arrayable;

class GetAllSpecialisationCoursesVM implements Arrayable
{
    public function toArray()
    {
        return SpecialisationCourse::query()->get();
    }
}

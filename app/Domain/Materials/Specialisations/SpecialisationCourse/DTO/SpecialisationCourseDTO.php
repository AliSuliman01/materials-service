<?php


namespace App\Domain\Materials\Specialisations\SpecialisationCourse\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class SpecialisationCourseDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $specialisation_id;
	/* @var integer|null */
	public $course_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'specialisation_id'				=> $request['specialisation_id'] ?? null ,
			'course_id'				=> $request['course_id'] ?? null ,

        ]);
    }
}

<?php


namespace App\Http\Requests\Materials\Specialisations\SpecialisationCourse;


use Illuminate\Foundation\Http\FormRequest;

class UpdateSpecialisationCourseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'specialisation_id'				=> 'integer|required' ,
			'course_id'				=> 'integer|required' ,

        ];
    }
}

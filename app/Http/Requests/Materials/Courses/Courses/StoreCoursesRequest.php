<?php


namespace App\Http\Requests\Materials\Courses\Courses;


use Illuminate\Foundation\Http\FormRequest;

class StoreCoursesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,

        ];
    }
}

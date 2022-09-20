<?php


namespace App\Http\Requests\Lessons;


use Illuminate\Foundation\Http\FormRequest;

class UpdateLessonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'video_path'				=> 'required|string' ,
			'course_id'				=> 'required|integer' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Materials\Courses\Courses;


use Illuminate\Foundation\Http\FormRequest;

class CourseSearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'level_id'				=> 'integer|nullable|exists:levels,id,deleted_at,NULL' ,
            'name' =>  'string|nullable',
            'categories' => 'nullable|array',
            'categories.*' => 'nullable|exists:categories,id,deleted_at,NULL',
        ];
    }
}

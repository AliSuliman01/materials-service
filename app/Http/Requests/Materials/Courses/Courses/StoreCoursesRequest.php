<?php


namespace App\Http\Requests\Materials\Courses\Courses;


use Illuminate\Foundation\Http\FormRequest;

class StoreCoursesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'duration'				=> 'integer|required' ,
            'level_id'				=> 'integer|required' ,
            'is_featured'				=> 'integer|nullable' ,
            'translations' => 'required|array',
            'translations.*.language_code' => 'required',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*.img_src' => 'required|string',
            'categories' => 'nullable|array',
            'categories.*' => 'nullable|exists:categories,id,deleted_at,NULL',
        ];
    }
}

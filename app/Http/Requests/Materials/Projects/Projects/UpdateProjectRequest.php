<?php


namespace App\Http\Requests\Materials\Projects\Projects;


use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Materials\Specialisations\Specialisations;


use Illuminate\Foundation\Http\FormRequest;

class UpdateSpecialisationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,

        ];
    }
}

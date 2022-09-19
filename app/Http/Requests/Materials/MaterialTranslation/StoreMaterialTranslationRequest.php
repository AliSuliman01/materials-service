<?php


namespace App\Http\Requests\Materials\MaterialTranslation;


use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_id'				=> 'integer|required' ,
			'language_code'				=> 'integer|required' ,
			'name'				=> 'string|required' ,
			'description'				=> 'string|nullable' ,
			'notes'				=> 'string|nullable' ,

        ];
    }
}

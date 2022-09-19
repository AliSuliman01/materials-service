<?php


namespace App\Http\Requests\Materials\MaterialStatus\MaterialStatusTranslation;


use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialStatusTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_status_id'				=> 'integer|required' ,
			'language_code'				=> 'string|required' ,
			'name'				=> 'string|required' ,
			'description'				=> 'string|nullable' ,
			'notes'				=> 'string|nullable' ,

        ];
    }
}

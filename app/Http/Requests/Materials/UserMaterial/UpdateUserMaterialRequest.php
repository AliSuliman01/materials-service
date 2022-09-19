<?php


namespace App\Http\Requests\Materials\UserMaterial;


use Illuminate\Foundation\Http\FormRequest;

class UpdateUserMaterialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'user_id'				=> 'integer|required' ,
			'material_id'				=> 'integer|required' ,
        ];
    }
}

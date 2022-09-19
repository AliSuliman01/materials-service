<?php


namespace App\Http\Requests\Materials\UserMaterial;


use App\Http\Requests\ApiFormRequest;

class StoreUserMaterialRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
			'user_id'				=> 'integer|required' ,
			'material_id'				=> 'integer|required' ,

        ];
    }
}

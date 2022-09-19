<?php


namespace App\Http\Requests\Tips\Tips;


use Illuminate\Foundation\Http\FormRequest;

class UpdateTipRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_id'				=> 'nullable|integer' ,
			'icon'				=> 'nullable|string' ,

        ];
    }
}

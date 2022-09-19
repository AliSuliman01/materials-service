<?php


namespace App\Http\Requests\Materials\MaterialStatus\MaterialStatus;


use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialStatusRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,

        ];
    }
}

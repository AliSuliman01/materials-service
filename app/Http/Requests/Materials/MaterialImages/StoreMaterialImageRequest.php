<?php


namespace App\Http\Requests\Materials\MaterialImages;


use Illuminate\Foundation\Http\FormRequest;

class StoreMaterialImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_id'				=> 'integer|required' ,
			'img_src'				=> 'string|required' ,

        ];
    }
}

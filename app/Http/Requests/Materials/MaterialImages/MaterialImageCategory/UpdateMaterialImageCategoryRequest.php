<?php


namespace App\Http\Requests\Materials\MaterialImages\MaterialImageCategory;


use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialImageCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_image_id'				=> 'integer|required' ,
			'category_id'				=> 'integer|required' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Materials\MaterialCategory;


use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'material_id'				=> 'integer|required' ,
			'category_id'				=> 'integer|required' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Pages\PageCategory;


use Illuminate\Foundation\Http\FormRequest;

class UpdatePageCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'category_id'				=> 'integer|required' ,
			'page_id'				=> 'integer|required' ,

        ];
    }
}

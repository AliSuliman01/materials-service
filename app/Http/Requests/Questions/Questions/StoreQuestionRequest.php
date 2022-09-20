<?php


namespace App\Http\Requests\Questions\Questions;


use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'category_id'				=> 'required|integer' ,
			'material_id'				=> 'required|integer' ,
            'translations' => 'array|required'
        ];
    }
}

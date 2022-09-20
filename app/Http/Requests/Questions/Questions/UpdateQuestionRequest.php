<?php


namespace App\Http\Requests\Questions\Questions;


use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'category_id'				=> 'required|integer' ,
			'material_id'				=> 'required|integer' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Questions\QuestionCategory;


use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'question_id'				=> 'required|integer' ,
			'category_id'				=> 'required|integer' ,

        ];
    }
}

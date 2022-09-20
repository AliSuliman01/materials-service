<?php


namespace App\Http\Requests\Questions\QuestionOptions\QuestionOptionTranslation;


use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionOptionTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'question_option_id'				=> 'required|integer' ,
			'language_code'				=> 'required|string' ,
			'name'				=> 'required|string' ,
			'description'				=> 'nullable|string' ,
			'notes'				=> 'nullable|string' ,

        ];
    }
}

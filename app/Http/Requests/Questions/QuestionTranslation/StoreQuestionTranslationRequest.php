<?php


namespace App\Http\Requests\Questions\QuestionTranslation;


use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'question_id'				=> 'required|integer' ,
			'language_code'				=> 'required|string' ,
			'name'				=> 'required|string' ,
			'description'				=> 'nullable|string' ,
			'notes'				=> 'nullable|string' ,

        ];
    }
}

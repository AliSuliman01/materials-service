<?php


namespace App\Http\Requests\Questions\QuestionOptions\QuestionOptions;


use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionOptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'question_id'				=> 'required|integer' ,
			'is_correct'				=> 'nullable|integer' ,
			'accuracy_percent'				=> 'nullable|integer' ,

        ];
    }
}

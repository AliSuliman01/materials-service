<?php


namespace App\Http\Requests\Questions\QuestionToQuestion;


use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionToQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'prev_question_id'				=> 'required|integer' ,
			'next_question_id'				=> 'required|integer' ,

        ];
    }
}

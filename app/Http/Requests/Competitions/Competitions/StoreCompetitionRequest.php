<?php


namespace App\Http\Requests\Competitions\Competitions;


use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'created_by_user_id'				=> 'required|integer' ,
			'title'				=> 'required|string' ,
			'body'				=> 'required|string' ,
			'competition_type_id'				=> 'required|integer' ,
			'first_question_id'				=> 'nullable|integer' ,

        ];
    }
}

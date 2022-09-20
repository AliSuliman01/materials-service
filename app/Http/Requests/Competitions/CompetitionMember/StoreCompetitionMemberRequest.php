<?php


namespace App\Http\Requests\Competitions\CompetitionMember;


use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionMemberRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'user_id'				=> 'required|integer' ,
			'competition_id'				=> 'required|integer' ,

        ];
    }
}

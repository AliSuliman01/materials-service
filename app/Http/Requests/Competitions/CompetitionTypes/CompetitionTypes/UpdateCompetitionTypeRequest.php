<?php


namespace App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypes;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCompetitionTypeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,

        ];
    }
}

<?php


namespace App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypeTranslation;


use Illuminate\Foundation\Http\FormRequest;

class StoreCompetitionTypeTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'competition_type_id'				=> 'required|integer' ,
			'language_code'				=> 'required|string' ,
			'name'				=> 'required|string' ,
			'description'				=> 'nullable|string' ,
			'notes'				=> 'nullable|string' ,

        ];
    }
}

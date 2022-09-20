<?php


namespace App\Http\Requests\Competitions\CompetitionCategory;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCompetitionCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required|integer' ,
			'category_id'				=> 'required|integer' ,
			'competition_id'				=> 'required|integer' ,

        ];
    }
}

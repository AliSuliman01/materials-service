<?php


namespace App\Http\Requests\Levels\Levels;

use App\Http\Requests\ApiFormRequest;

class UpdateLevelRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
			'sequence'				=> 'nullable|integer' ,
            'translations' => 'nullable|array',
            'translations.*.id' => 'nullable|exists:level_translations,id,deleted_at,NULL',
            'translations.*.language_code' => 'required|exists:languages,language_code,deleted_at,NULL',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
            ];
    }
}

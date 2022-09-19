<?php


namespace App\Http\Requests\Levels\Levels;


use Illuminate\Foundation\Http\FormRequest;

class StoreLevelRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'sequence'				=> 'nullable|integer' ,
            'translations' => 'required|array',
            'translations.*.language_code' => 'required|exists:languages,language_code,deleted_at,NULL',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
        ];
    }
}

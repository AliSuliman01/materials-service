<?php


namespace App\Http\Requests\Materials\Materials;

use App\Http\Requests\ApiFormRequest;

class StoreMaterialRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
			'duration'				=> 'integer|required' ,
			'level_id'				=> 'integer|required' ,
            'translations' => 'required|array',
            'translations.*.language_code' => 'required|exists:languages,language_code,deleted_at,NULL',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*.img_src' => 'required|string',
            'categories' => 'nullable|array',
            'categories.*' => 'nullable|exists:categories,id,deleted_at,NULL',
        ];
    }
}

<?php


namespace App\Http\Requests\Materials\Materials;


use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'duration' => 'integer|required',
            'level_id' => 'integer|required',
            'translations' => 'required|array',
            'translations.*.id' => 'required|exists:material_translations,id,deleted_at,NULL',
            'translations.*.language_code' => 'required|exists:languages,id,deleted_at,NULL',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*.id' => 'required|exists:material_images,id,deleted_at,NULL',
            'images.*.img_src' => 'required|string',
            'categories' => 'nullable|array',
            'categories.*' => 'nullable|exists:categories,id,deleted_at,NULL',
        ];
    }
}

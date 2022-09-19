<?php


namespace App\Http\Requests\Categories\Categories;


use App\Http\Requests\ApiFormRequest;

class CategoryStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'translations' => 'required|array',
            'translations.*.language_code' => 'required|exists:languages,id,deleted_at,NULL',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'translations.*.notes' => 'nullable|string',
            'pages' => 'nullable|array',
            'pages.*' => 'nullable|exists:pages,id,deleted_at,NULL',
            'images' => 'nullable|array',
            'images.*.img_src' => 'required|string',
            'parent_category_id' => 'nullable|exists:categories,id,deleted_at,NULL',
            'sequence' => 'nullable',
        ];
    }
}

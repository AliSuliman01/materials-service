<?php


namespace App\Http\Requests\Pages;


use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'categories' => 'nullable|array',
            'categories.*' => 'nullable|exists:categories,id,deleted_at,NULL',
        ];
    }
}

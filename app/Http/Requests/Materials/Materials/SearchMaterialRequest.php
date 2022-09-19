<?php


namespace App\Http\Requests\Materials\Materials;


use Illuminate\Foundation\Http\FormRequest;

class SearchMaterialRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'search_string' => 'required|string'
        ];
    }
}

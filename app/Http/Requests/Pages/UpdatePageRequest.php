<?php


namespace App\Http\Requests\Pages;


use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'name'				=> 'required|string' ,

        ];
    }
}

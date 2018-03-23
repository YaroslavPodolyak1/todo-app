<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'caption' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'caption.required' => 'Введите название задания',
            'description.required'  => 'Введите описание',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class StoreUpdateLink extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): Array
    {
        return [
            'title' => ['required', 'min:3', 'max:255']
        ];
    }
}

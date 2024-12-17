<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyActivityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => 'required|string|min:1|max:9999',
            'name' => 'required|string|min:1|max:9999',
            'kalori' => 'numeric|min:0|max:999999',
            'lemak' => 'numeric|min:0|max:999999',
            'protein' => 'numeric|min:0|max:999999',
            'karbohidrat' => 'numeric|min:0|max:999999',
            'date' => '',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:255',
            'date_of_birth' => 'required|string|min:1|max:255',
            'gender' => 'required|string|min:1|max:255',
            'goals' => 'required|string|min:1|max:255',
            'weight' => 'required|numeric|min:1|max:9999',
            'height' => 'required|numeric|min:1|max:9999',
            'activity_level' => 'required|string|min:1|max:255',
        ];
    }
}

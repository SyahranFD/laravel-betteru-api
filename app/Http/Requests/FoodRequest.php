<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'kalori' => 'required|numeric|min:0|max:999999',
            'protein' => 'required|numeric|min:0|max:999999',
            'lemak' => 'required|numeric|min:0|max:999999',
            'karbohidrat' => 'required|numeric|min:0|max:999999',
            'note' => 'nullable|string',
            'imageUrl' => 'nullable|string',
            'videoUrl' => 'nullable|string',
            'time' => 'nullable|numeric',
            'goals' => 'nullable|string',
        ];
    }
}

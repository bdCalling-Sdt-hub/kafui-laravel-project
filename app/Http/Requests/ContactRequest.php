<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact-name' => 'required|string|max:255',
            'contact-email' => 'required|email|max:255',
            'contact-phone' => 'required|string|max:20', // Adjust max length as needed
            'contact-service' => 'required|string|max:255',
            'contact-infos' => 'required|string', // Adjust validation as needed
        ];
    }
}

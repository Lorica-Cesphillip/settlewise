<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'division_name' => 'required|string|max:140',
            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'middle_name' => 'required|string|max:50',
            'address' => 'required|string|max:140',
            'birthdate' => 'required|date',
            'martial_status' => 'required|string|max:20',
            'email' => 'required|string|lowercase|email|max:255|unique:'. Rule::unique(\App\Models\User::class)->ignore($this->user()->employee_number),
            'contact_nos' => 'required|string|max:12',
            'position' => 'required|string|max:255',
            'employee_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}

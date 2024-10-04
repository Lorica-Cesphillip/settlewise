<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
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
            //
            'requested' => ['required', 'boolean'],
            'request_type' => ['string', 'max:140'],
            'request_details' => ['string', 'max:140'],
            'request_purpose' => ['string', 'max:140']
        ];
    }
}

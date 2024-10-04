<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;
use App\Models\Documents;

class DocumentRequest extends FormRequest
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
            'employee_number' => ['required', 'integer'],
            'aphso_division' => ['required', 'integer'],
            'document_type' => ['required', 'string', 'max:40'],
            'subject' => ['required', 'max:255', 'string'],
            'file' => ['required',
                File::types(['docx', 'pdf', 'xlsx', 'pptx'])
                ->max(10 * 1024)
                ]
        ];
    }
}

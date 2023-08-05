<?php

namespace App\Http\Requests\Timetable;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'import_file' => 'required|mimes:csv,txt',
        ];
    }

    public function messages(): array
    {
        return [
            'import_file.required' => 'Datoteko je treba naložiti',
            'import_file.mimes' => 'Format mora biti .csv',
        ];
    }
}

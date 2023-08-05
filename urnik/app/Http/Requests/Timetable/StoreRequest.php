<?php

namespace App\Http\Requests\Timetable;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'new_activity' => 'required_without:activity_code|min:2|max:255|nullable',
            'activity_code' => 'required_without:new_activity|exists:activities,code|nullable',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ];
    }

    public function messages(): array
    {
        return [
            'activity_code.required_without' => 'Niste izbrali dejavnost',
            'activity_code.exists' => 'Neobstoječe dejavnost',

            'new_activity.required_without' => 'Vnesete lahko tudi novo dejavnost',
            'new_activity.min' => 'Najmanjša dolžina dejavnosti je :min',
            'new_activity.max' => 'Največja dolžina dejavnosti je :max',

            'date.required' => 'Datum je obvezen',
            'date.date' => 'Datum je bil vnesen v napačni obliki',

            'time.required' => 'Čas je obvezen',
            'time.date_format' => 'Čas je bil vnesen v napačni obliki',
        ];
    }
}

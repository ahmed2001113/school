<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroom extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // بنخلي دي ترو
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
            'List_Classes.*.Name' => 'required|unique:classrooms,Name,'.$this->id,
            'List_Classes.*.Name_en' => 'required|unique:classrooms,Name,'.$this->id,
            'List_Classes.*.Grade_id' => 'required',
        ];

    }
    public function messages()
    {
        return [
            'List_Classes.*.Name.required' => trans('validation.required'),
            'List_Classes.*.Name.unique' => trans('validation.unique'),
            'List_Classes.*.Name_en.required' => trans('validation.required'),
            'List_Classes.*.Name_en.unique' => trans('validation.unique'),
            'List_Classes.*.Grade_id.required' => trans('validation.required'),
        ];
    }
}

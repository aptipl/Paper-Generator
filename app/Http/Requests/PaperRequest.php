<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'subject_id' => 'required|numeric|exists:subjects,id',
            'total_marks' => 'required|numeric',
            'header' => 'required',
        ];

        switch ($this->method()){
            case 'POST':
            case 'PUT':
            case 'PATCH':
        }

        return $rules;
    }
}

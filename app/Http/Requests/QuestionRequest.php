<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuestionRequest extends FormRequest
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
            'question' => 'required',
            'subject_id' => 'required|numeric|exists:subjects,id',
            'type' => 'required|boolean',
            'answer1' => 'required_if:type,1',
            'answer2' => 'required_if:type,1',
            'answer3' => 'required_if:type,1',
            'answer4' => 'required_if:type,1',
            'marks' => 'required|numeric',
            'level' => 'required|digits_between:0,2',
        ];

        switch ($this->method()){
            case 'POST':
                $rules['question'] = Rule::unique('questions')->where(function ($query) {
                    return $query->where('subject_id', $this->subject_id);
                });
            case 'PUT':
            case 'PATCH':
                $rules['question'] = Rule::unique('questions')->where(function ($query) {
                    return $query->where('subject_id', $this->subject_id)
                        ->where('id', '<>', $this->segment(2));
                });
        }

        return $rules;
    }
}

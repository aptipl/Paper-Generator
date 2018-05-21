<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SubjectRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
                return [
                    'name' => 'required|unique:subjects,name',
                    'code' => 'required|unique:subjects,code'
//                    'stream_id' => 'required|numeric|exists:streams,id'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => [
                        'required',
                        Rule::unique('subjects')->ignore($this->segment(2)),
                    ],
                    'code' => [
                        'required',
                        Rule::unique('subjects')->ignore($this->segment(2)),
                    ]
 /*                   'name' => Rule::unique('subjects')->where(function ($query) {
                        return $query->where('stream_id', $this->stream_id)
                            ->where('id', '<>', $this->segment(2));
                    })*/
                   // 'stream_id' => 'required|numeric|exists:streams,id',
                ];
        }
    }
}

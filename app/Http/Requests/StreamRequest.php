<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class streamRequest
 * @package App\Http\Requests
 */
class StreamRequest extends FormRequest
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
                    'name' => 'required|unique:streams,name',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|unique:streams,name,'.($this->segment(2)),
                ];
        }
    }
}

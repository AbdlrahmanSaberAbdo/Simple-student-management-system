<?php

namespace Core\Learning\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'full_name' => 'string|unique:students|required',
                    'birthdate' => 'required',
                    'email' => 'string|unique:students|required',
                    'identifier' => 'string|unique:students|required',
                    'level_id' => 'required',
                ];
            }
            case 'PUT': {
                return [
                    'full_name' => 'string|unique:students|required',
                    'birthdate' => 'required',
                    'email' => 'string|unique:students|required',
                    'identifier' => 'string|unique:students|required',
                    'level_id' => 'required',
                ];
            }
        }
    }
}

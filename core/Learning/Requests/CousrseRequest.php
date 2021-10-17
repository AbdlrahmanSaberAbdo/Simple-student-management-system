<?php

namespace Core\Learning\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CousrseRequest extends FormRequest
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
                    'name' => 'string|required',
                    'code' => 'string|unique:cousrses|required',
                    'description' => 'required',
                ];
            }
            case 'PUT': {
                return [
                    'name' => 'string|required',
                    'code' => 'string|unique:cousrses|required',
                    'description' => 'required',
                ];
            }
        }
    }
}

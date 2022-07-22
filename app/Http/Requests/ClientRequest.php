<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        return [
            'name' => array(
                'string',
                'min:3',
                'regex:/([a-zA-z])/'
            )
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'O campo nome aceita somente letras',
            'name.min' => 'O nome deve ter no mínimo 3 letras',
            'name.regex' => 'O campo nome aceita somente letras',
        ];
    }
}

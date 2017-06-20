<?php

namespace restaurant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personaFormRequest extends FormRequest
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
            'nombre'=>'requierd|max:30',
            'apellido'=>'required|max:30',
            'dirreccion'=>'max:50'
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CaebRequest extends Request
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
            'codigo' => 'required|unique:caeb|min:5|max:5',
            'descripcion' => 'required'
        ];
    }
}

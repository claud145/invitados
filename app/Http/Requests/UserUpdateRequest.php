<?php

namespace invitados\Http\Requests;

use invitados\Http\Requests\Request;

class UserUpdateRequest extends Request
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
        'name' => 'required',
        'apellidos' => 'required',
        'ci' => 'required',
        'nroCelular' => 'required',
        'fechanac' => 'required',
        'sexo' => 'required',
        'email' => 'required',
        'usuario' => 'required',
        'codigo' => 'required',
      ];
    }
}

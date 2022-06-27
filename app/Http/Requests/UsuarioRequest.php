<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {



        return [

          'name'                     => 'required|max:20',
          'email'                    => 'required|max:30',
          'password'                 => 'required|max:30',
          'roles'                    => 'required',
          'foto'                     => 'image|mimes:png,jpg,jpeg,svg,gif|max:2040',

        ];
    }

    public function attributes()
    {
        return [

            'name'                     => 'Nombre de Usuario',
            'email'                    => 'Ingresa una dirección de correo',
            'password'                 => 'Ingresa una contraseña',
            'foto'                     => 'Ingresa una imagen no mayor a 2000 px',

        ];
    }
}

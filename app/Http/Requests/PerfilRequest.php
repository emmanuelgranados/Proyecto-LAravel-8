<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilRequest extends FormRequest
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
            'email'                    => 'required|email|max:30',
            'phone'                    => 'required|max:15',
            'message'                  => 'required',
            'fk_id_estado'             => 'required',
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
              'phone'                    => 'Ingresa un numero telefonico',
              'message'                  => 'Ingresa una biografia',
              'fk_id_estado'              => 'Selecciona un estado',

          ];
      }
}

<?php

namespace App\Http\Controllers\Administracion;

use App\Models\ExpiraContrasena;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\RolesRequest;
use Carbon\Carbon;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        return view('administracion/usuarios',[ 'roles' => Roles::select('name','id')
                                                  ->where('activo', 1)
                                                  ->where('name' ,'<>', 'sistemas')
                                                  ->get()]);
     }


     public function crear_usuario(UsuarioRequest $request){

    $solicitud = collect($request->all())->except('_token');

    $this->crear($solicitud);

    return "Exito";

    }


    private function crear($solicitud){

            User::create([
           'name' => $solicitud['name'],
           'email' => $solicitud['email'],
           'fk_id_roles' => $solicitud['roles'],
           'password' => Hash::make($solicitud['password']),
           'activo' => 1,
      ]);

        return "Exito";
    }

   public function eliminar_usuario(Request $request){

    User::where('id',$request->id)->update( ['eliminado' => 1 ] );

    return "Exito";
   }

   public function desactivar_usuario(Request $request){

    User::where('id',$request->id)->update( ['activo' => 0] );

    return "Exito";
   }

    public function nuevo_rol(RolesRequest $request){

       Roles::create(['name' => $request['name'],
                      'description' => $request['description'],
                      'activo'=>1]);

       return "Exito";
    }

    public function activar_usuario(Request $request){

        User::where('id',$request->id)->update( ['activo' => 1] );

        return "Exito";
    }

    public function password_usuario(Request $request){
// dd($request);
        User::where('id',$request->id)->update( ['password' => Hash::make($request->password)] );

        return "Exito";
    }


}

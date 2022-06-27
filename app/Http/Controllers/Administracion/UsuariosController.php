<?php

namespace App\Http\Controllers\Administracion;

use App\Models\ExpiraContrasena;
use App\Models\Roles;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
use Carbon\Carbon;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        return view('administracion/usuarios',['usuarios' => User::where('activo', 1)->get(),
        'roles' => Roles::select('name','id')->where('activo', 1)->where('name' ,'<>', 'sistemas')->where('name' ,'<>', 'admin')->get()]);
     }


     public function crear_usuario(Request $request){



    $solicitud = collect($request->all())->except('_token','roles');

    $roles = collect($request->all())->except('_token','name','email','password');

    $this->crear($solicitud,$roles);

    return "Exito";

    }


    private function crear ($solicitud,$roles){
        // dd($solicitud,$roles);


      $entity = User::create([
          'name' => $solicitud['name'],
          'email' => $solicitud['email'],
          'password' => Hash::make($solicitud['password']),
          'activo' => 1,
      ]);


 foreach($roles as $key => $rol){
    //  dd($rol);
     foreach($rol as $rol2 ){
        RoleUser::create([
            'role_id' => $rol2,
            'user_id' => $entity->id,
        ]);

     }

 }



        return "Exito papuuuus";


    }
}

<?php

namespace App\Http\Controllers\Administracion;

use App\Models\User;
use App\Models\Grupos;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GruposTrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        return view('grupos/grupos',['users'=>User::select('id','name')->where('activo',1)->where('eliminado',0)->get()]);
     }


    function nuevo_grupo(Request $request){
// dd($request);
        Grupos::create($request->grupos);

        return "Exito";

     }

     function agregar_users_grupo(Request $request){


        foreach($request->fk_id_users as $usuario ){

            UsersGrupos::create(['fk_id_users' => $usuario,
            'fk_id_grupos'=>$request->fk_id_grupos,
            'activo'=>1]);

        }

        $this->actualizarGrupo( $request->fk_id_users , $request->fk_id_grupos );

        // $users = collect($request->all())->except('_token','fk_id_grupos');
        // $grupo = collect($request->all())->except('_token','fk_id_users');

        // dd($users, $grupo);

        // foreach($users as  $user){

        //     foreach($user as $us ){
        //         UsersGrupos::create(['fk_id_users' =>$us,
        //         'fk_id_grupos'=>$grupo['fk_id_grupos'],
        //         'activo'=>1]);
        //     }

        //  }

         return  "Exito";
     }


    public function actualizarGrupo( $usuariosGrupos , $grupo ){


        $usuarios = User::where('fk_id_grupos',$grupo)->get()->toArray();

        $diferencias = array_diff($usuariosGrupos , $usuarios);

        foreach( $usuariosGrupos as $usuario  ){
            User::where('id',$usuario )->update([
                'fk_id_grupos' => 1
            ]);
        }

        if(  count($usuarios) > 0 ){
            foreach( $diferencias  as $usuario  ){
                User::where('id',$usuario )->update([
                    'fk_id_grupos' => 0
                ]);
            }

        }

    }


}

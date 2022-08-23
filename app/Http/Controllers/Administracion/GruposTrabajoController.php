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

        Grupos::create($request->grupos);

        return "Exito";

     }

     function agregar_users_grupo(Request $request){


       $grupo= collect($request->all())->except('_token','fk_id_users');

       $usuariosActual = User::where('fk_id_grupos',$grupo)->pluck('id')->toArray();
       $usuariosNuevo= collect($request->all())->except('_token','fk_id_grupos')->toArray();

       $nuevosintegrantes = array_diff($usuariosNuevo['fk_id_users'] , $usuariosActual);

       $sacarintegrantes = array_diff( $usuariosActual,$usuariosNuevo['fk_id_users'] );


       //INSERTAR USUARIOS AL GRUPO Y ACTUALIZA USUARIO
         if(!empty($nuevosintegrantes)){

            foreach($nuevosintegrantes as $dato ){

            UsersGrupos::create(['fk_id_users' => $dato,
            'fk_id_grupos'=>$grupo['fk_id_grupos'],
            'activo'=>1]);

            User::where('id',$dato )->update([
                'fk_id_grupos' => $grupo['fk_id_grupos']]);
                                                    }
            }
         //SACA USUARIOS DEL GRUPO Y ACTUALIZA USUARIO A 0
         if(!empty($sacarintegrantes)){
            echo("sacar Integrantes");

            foreach($sacarintegrantes as $dato ){

            UsersGrupos::where('fk_id_users',$dato )->update([
            'activo'=>0,
            'eliminado'=>1]);

            User::where('id',$dato )->update([
                'fk_id_grupos' => 0  ]);
            }

            }



         return  "Exito";
     }



     public function eliminar_grupo(Request $request){

        Grupos::where('id',$request->id )->update([
            'activo'=>0,
            'eliminado'=>1]);

        User::where('fk_id_grupos',$request->id)->update([
                'fk_id_grupos' => 0  ]);


     }


     public function vaciar_users_grupo(Request $request){

        User::where('fk_id_grupos',$request->fk_id_grupos)->update([
                    'fk_id_grupos' => 0  ]);

     }




    }





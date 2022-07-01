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

        $users = collect($request->all())->except('_token','fk_id_grupos');

        $grupo = collect($request->all())->except('_token','fk_id_users');

        //   dd($users, $grupo);

        foreach($users as  $user){

            foreach($user as $us ){
                UsersGrupos::create(['fk_id_users' =>$us,
                'fk_id_grupos'=>$grupo['fk_id_grupos'],
                'activo'=>1]);
            }

         }

         return  "Exito";
     }

}

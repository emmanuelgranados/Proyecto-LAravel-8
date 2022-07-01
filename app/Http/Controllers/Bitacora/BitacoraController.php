<?php

namespace App\Http\Controllers\Bitacora;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Comentarios;
use App\Models\Direcciones;
use App\Models\Estados;
use App\Models\Grupos;
use App\Models\Municipios;
use App\Models\Paises;
use App\Models\Roles;
use App\Models\RoleUser;
use App\Models\Tareas;
use App\Models\Telefonos;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BitacoraController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {


        // dd(Auth::user()->fk_id_rol);


        // $idUsuario = Auth::user()->id;

        // $rol = RoleUser::select('roles.id')
        // ->join('roles','roles.id','=','role_user.role_id')
        // ->where('role_user.user_id',$idUsuario)
        // ->first()
        // ->toArray();


        // if( $rol['id'] == 3 || $rol['id'] == 4 ){



        //     if( $rol['id'] == 3 ){

        //         $grupo = Grupos::where('lider_fk_id',$idUsuario)->first()->toArray();
        //         $userGrupo = UsersGrupos::where('fk_id_grupos',$grupo['id'])->get()->toArray();

        //     }else if($rol['id'] == 4){

        //         $userGrupo =  UsersGrupos::where('fk_id_user',$idUsuario )->first()->toArray();
        //         $grupo = Grupos::where('id',$userGrupo['fk_id_grupos'] )->first()->toArray();;


        //     }

        // }else{

        //     $grupo = 0;
        //     $userGrupo = 0;

        // }



        // dd($rol,$grupo,$userGrupo);


        // dd();
        return view('bitacora/bitacora');

    }

    public function nuevaTarea( Request $request)
    {

        // dd($request);

        $nuevaTarea = Tareas::create($request->tarea);

        $comentario = $request->comentario;

        $comentario['fk_id_tareas'] = $nuevaTarea->id;

        $nuevaComentario = Comentarios::create($comentario);

        // dd($comentario);

        // $nuevaDireccion = $request->cliente['direcciones'];

        // foreach( $nuevaDireccion  as $i => $direccion ){

        //     $nuevaDireccion[$i]['fk_id_clientes'] = $nuevoCliente->id;
        //     $nuevaDireccion = Direcciones::create( $nuevaDireccion[$i] );

        //     foreach( $direccion['telefonos'] as $j => $telefonos ){

        //         $direccion['telefonos'][$j]['fk_id_direcciones'] = $nuevaDireccion->id;
        //         $nuevoTelefono = Telefonos::create( $direccion['telefonos'][$j]);

        //     }


        // }

        return "Exito papuuuus";

    }

    public function nuevoComentarios( Request $request)
    {

        $nuevoComentario = Comentarios::create($request->comentario);

        return "Exito papuuuus";

    }

    public function editarTarea( Request $request)
    {
        // dd( $request );
        Tareas::where('id',$request->tarea['id'])->update($request->tarea );

        // foreach( $request->direcciones as $direccion ){
        //     Direcciones::where('id',$direccion['id'])->update($direccion);
        // }

        // foreach( $request->telefonos  as $telefono ){
        //     Telefonos::where('id',$telefono['id'])->update($telefono);
        // }



        return "Exito papuuuus2";

    }

    public function eliminarTarea( Request $request )
    {
        Tareas::where('id',$request->id)->update( ['eliminado' => 1 ] );

        return "Exito papuuuus3";
    }

}

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
use App\Models\TareasSeguimiento;
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

        return view('bitacora/bitacora');

    }

    public function nuevaTarea( Request $request)
    {

        $nuevaTarea = Tareas::create($request->tarea);

        $comentario = $request->comentario;

        $comentario['fk_id_tareas'] = $nuevaTarea->id;

        $nuevaComentario = Comentarios::create($comentario);

        TareasSeguimiento::create(['fk_id_tareas' => $nuevaTarea->id ,'fk_id_acciones_tareas' => 1]);

        return "Exito papuuuus";

    }

    public function nuevoComentarios( Request $request)
    {

        $nuevoComentario = Comentarios::create($request->comentario);

        return "Exito papuuuus";

    }

    public function editarTarea( Request $request)
    {

        Tareas::where('id',$request->tarea['id'])->update($request->tarea );

        TareasSeguimiento::create(['fk_id_tareas' => $request->tarea['id'],'fk_id_acciones_tareas' => 2]);


        return "Exito papuuuus2";

    }

    public function eliminarTarea( Request $request )
    {

        Tareas::where('id',$request->id)->update( ['eliminado' => 1 ] );

        TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 3]);

        return "Exito papuuuus3";
    }

    public function solicitarTerminarTarea( Request $request )
    {

        Tareas::where('id',$request->id)->update( ['fk_id_estatus' => 4 ] );

        TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 4]);

        return "Exito papuuuus3";
    }


    public function terminarTarea( Request $request )
    {

        // Tareas::where('id',$request->id)->update( ['eliminado' => 1 ] );
        Tareas::where('id',$request->id)->update( ['fk_id_estatus' => 3 ] );

        TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 5]);

        return "Exito papuuuus3";
    }

    public function rechazarTarea( Request $request )
    {

        Tareas::where('id',$request->id)->update( ['fk_id_estatus' => 2 ] );

        TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 6]);

        return "Exito papuuuus3";
    }



}

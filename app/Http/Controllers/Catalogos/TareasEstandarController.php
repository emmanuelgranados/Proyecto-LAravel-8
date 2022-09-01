<?php

namespace App\Http\Controllers\Catalogos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TareasEstandar;

class TareasEstandarController extends Controller
{
    public function index(){


        return view('catalogos.tareas_estandar.tareas_estandar');
    }


    public function new_tareas_estandar(Request $request){


        TareasEstandar::create([
            'tarea_estandar' => $request['tarea_estandar'],
            'activo' => 1,
        ]);

        return "Exito";
    }

    public function edit_tareas_estandar(Request $request){

        TareasEstandar::where('id',$request->id)->update(
            ['tarea_estandar' => $request['tarea_estandar'],] );

        return "Exito";
    }

    public function delete_tareas_estandar(Request $request){

        TareasEstandar::where('id',$request->id)->update( ['eliminado' => 1] );

        return "Exito";
    }

    public function bloquear_tareas_estandar(Request $request){


        TareasEstandar::where('id',$request->id)->update( ['activo' => 0] );

        return "Exito";

    }

    public function desbloquear_tareas_estandar(Request $request){


        TareasEstandar::where('id',$request->id)->update( ['activo' => 1] );

        return "Exito";


    }


}

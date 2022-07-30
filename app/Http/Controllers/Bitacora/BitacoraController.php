<?php

namespace App\Http\Controllers\Bitacora;

use App\Http\Controllers\Controller;
use App\Models\Comentarios;
use App\Models\Tareas;
use App\Models\TareasSeguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Hal\HalEmailController as Hal;
use App\Models\TareasArchivos;

class BitacoraController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        // $this->notificacionCorreo("Hola");

        return view('bitacora/bitacora');

    }

    public function nuevaTarea( Request $request)
    {

        $nuevaTarea = Tareas::create($request->tarea);
        $comentario = $request->comentario;

        $comentario['fk_id_tareas'] = $nuevaTarea->id;
        $nuevaComentario = Comentarios::create($comentario);

        if( !is_null( $request->archivo  ) ){

            $nombreArchivo = date('His').'-'.$request->file('archivo_tarea')->getClientOriginalName();

            Storage::disk('tareas')->put( $nombreArchivo ,  \File::get(  $request->file('archivo_tarea') ));

            $archivo = $request->archivo;


            $archivo['nombre_archivo'] = $nombreArchivo;
            $archivo['fk_id_tareas'] = $nuevaTarea->id;

            TareasArchivos::create( $archivo );

            Comentarios::create([
                'comentario' => 'Se agrego un nuevo archivo a la tarea <a href="/tareas/'.$nombreArchivo.'" download><label>'.$nombreArchivo.'</label></a>',
                'fk_id_tareas' => $nuevaTarea->id,
                'fk_id_users' => $request->tarea['fk_id_users_alta'],
            ]);

        }



        TareasSeguimiento::create(['fk_id_tareas' => $nuevaTarea->id ,'fk_id_acciones_tareas' => 1]);

        return "OK";

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

        if( !is_null( $request->archivo  ) ){

            $archivo = $request->archivo;
            $nombreArchivo = date('His').'-'.$request->file('archivo_tarea')->getClientOriginalName();

            $archivo['nombre_archivo'] = $nombreArchivo;
            $archivo['fk_id_tareas'] = $request->tarea['id'];

            Storage::disk('tareas')->put($nombreArchivo,  \File::get(  $request->file('archivo_tarea') ));

            TareasArchivos::create( $archivo );

            Comentarios::create([
                'comentario' => 'Se agrego un nuevo archivo a la tarea <a href="/tareas/'.$nombreArchivo.'" download><label>'.$nombreArchivo.'</label></a>',
                'fk_id_tareas' => $request->tarea['id'],
                'fk_id_users' => $request->archivo['fk_id_users'],
            ]);

        }




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

    public function notificacionCorreo( $datos ){

        $mensaje= '<p>Buenos dias!  </br>
                                Te mando la plantilla de contpaq </p>
                                <p>Saludos!</p>
                                <p>Atte:<strong>Hal</strong></p>
                                ';

        $correos = array('ihernandez@automatyco.com');

        Hal::send($correos,'Mensaje de prueba',$mensaje,'', true );


    }



}

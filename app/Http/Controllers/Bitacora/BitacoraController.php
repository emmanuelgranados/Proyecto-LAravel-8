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
use App\Models\User;

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

        if( !is_null( $request->file('archivo_tarea') ) ){


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

        $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] = $nuevaTarea->id ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 1 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;


        TareasSeguimiento::create(  $tareaSeguiminto  );

        $this->notificacionCorreo( 'nuevo' , $nuevaTarea->id );

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

        $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] = $request->tarea['id'] ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 2 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;


        TareasSeguimiento::create(  $tareaSeguiminto  );

        // TareasSeguimiento::create(['fk_id_tareas' => $request->tarea['id'],'fk_id_acciones_tareas' => 2]);

        if( !is_null( $request->file('archivo_tarea') ) ){


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


        $this->notificacionCorreo( 'editar' , $request->tarea['id'] );

        return "Ok";

    }

    public function eliminarTarea( Request $request )
    {

        Tareas::where('id',$request->id)->update( ['eliminado' => 1 ] );

        // $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] =  $request->id ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 3 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;

        TareasSeguimiento::create(  $tareaSeguiminto  );

        // TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 3]);

        $this->notificacionCorreo( 'eliminar' , $request->tarea['id'] );

        return "Ok";
    }

    public function solicitarTerminarTarea( Request $request )
    {

        Tareas::where('id',$request->id)->update( ['fk_id_estatus' => 4 ] );

        // $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] =  $request->id ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 4 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;

        TareasSeguimiento::create(  $tareaSeguiminto  );

        // TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 4]);

        $this->notificacionCorreo( 'solicitudTerminado' , $request->id );

        return "Ok";
    }


    public function terminarTarea( Request $request )
    {

        // Tareas::where('id',$request->id)->update( ['eliminado' => 1 ] );
        Tareas::where('id',$request->id)->update( ['fk_id_estatus' => 3 ] );

        // $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] =  $request->id ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 5 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;

        TareasSeguimiento::create(  $tareaSeguiminto  );

        // TareasSeguimiento::create(['fk_id_tareas' => $request->id ,'fk_id_acciones_tareas' => 5]);

        $this->notificacionCorreo( 'terminado' , $request->id );

        return "Ok";
    }

    public function rechazarTarea( Request $request )
    {


        Tareas::where('id',$request->comentario['fk_id_tareas'])->update( ['fk_id_estatus' => 2 ] );

        if( !is_null( $request->file('archivo_tarea') ) ){

            $nombreArchivo = date('His').'-'.$request->file('archivo_tarea')->getClientOriginalName();

            Storage::disk('tareas')->put( $nombreArchivo ,  \File::get(  $request->file('archivo_tarea') ));

            $archivo = $request->archivo;


            $archivo['nombre_archivo'] = $nombreArchivo;
            $archivo['fk_id_tareas'] = $request->comentario['fk_id_tareas'];

            TareasArchivos::create( $archivo );

            Comentarios::create([
                'comentario' => 'Se rechazo la tarea por siguiente motivo: '.$request->comentario['comentario'].' y se agrego un nuevo archivo a la tarea <a href="/tareas/'.$nombreArchivo.'" download><label>'.$nombreArchivo.'</label></a>',
                'fk_id_tareas' => $request->comentario['fk_id_tareas'] ,
                'fk_id_users' => $request->comentario['fk_id_users'],
            ]);

        }else{

            Comentarios::create([
                'comentario' => 'Se rechazo la tarea por siguiente motivo: '.$request->comentario['comentario'],
                'fk_id_tareas' => $request->comentario['fk_id_tareas'] ,
                'fk_id_users' => $request->comentario['fk_id_users'],
            ]);


        }

        // $tareaSeguiminto = $request->tarea ;

        $tareaSeguiminto['fk_id_tareas'] =  $request->comentario['fk_id_tareas'] ;
        $tareaSeguiminto['fk_id_acciones_tareas'] = 6 ;
        $tareaSeguiminto['fk_id_users'] = Auth::user()->id;

        TareasSeguimiento::create(  $tareaSeguiminto  );

        // TareasSeguimiento::create(['fk_id_tareas' => $request->comentario['fk_id_tareas'] ,'fk_id_acciones_tareas' => 6]);

        $this->notificacionCorreo( 'rechazo' , $request->comentario['fk_id_tareas']);

        return "Ok";
    }

    public function notificacionCorreo( $accion , $fk_id_tarea ){


        switch( $accion ){

            case 'nuevo':
                $mensajeAccion = 'Se agrego una nueva tarea';
                $titulo = 'Nueva tarea';
            break;

            case 'editar':
                $mensajeAccion = 'Se edito la tarea';
                $titulo = 'Se edito una tarea';
            break;

            case 'eliminar':
                $mensajeAccion = 'Se elimino la tarea';
                $titulo = 'Eliminación';
            break;

            case 'solicitudTerminado':
                $mensajeAccion = 'Se solocito el terminado de la tarea';
                $titulo = 'Solicitud para terminar una tarea';
            break;

            case 'terminado':
                $mensajeAccion = 'Se termino la tarea';
                $titulo = 'Se termino una tarea';
            break;

            case 'rechazo':
                $mensajeAccion = 'Se rechazo la tarea';
                $titulo = 'Rechazo de una tarea';
            break;


            default:
                 $mensajeAccion = 'Error';
            break;

        }


        $tarea = Tareas::where('id', $fk_id_tarea )->first();

        $correAlta = User::where('id',$tarea['fk_id_users_alta'])->first();
        $correAsignado = User::where('id',$tarea['fk_id_users_asignado'])->first();

        // dd( $tarea,$correAlta,$correAsignado,$tarea['fk_id_users_alta']  );


        $mensaje= '<p>Buen día! </br> </br>
                    '. $mensajeAccion .'</br></br>
                    '. $tarea['tarea'].'
                    </p>
                    <p>Saludos!</p>
                    <p>Atte:<strong>Hal</strong></p>
                    ';

        // dd( $correAlta['email'] , $correAsignado['email']  );
        $correos = array( $correAlta['email'] , $correAsignado['email'] );

        Hal::send($correos,$titulo,$mensaje,'', false );


    }



}

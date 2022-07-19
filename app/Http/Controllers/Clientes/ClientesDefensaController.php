<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\ClientesSubTareasPredefinidas;
use App\Models\ClientesTareasEstandar;
use App\Models\Direcciones;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Paises;
use App\Models\TareasEstandar;
use App\Models\Telefonos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClientesDefensaController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {



        $clientes = Clientes::all();
        $paises = Paises::all();
        $estados = Estados::all();

        return view('clientes/clientes_defensa',[
            'clientes'=>$clientes,
            'paises' => $paises,
            'estados' => $estados

        ]);

    }

    public function nuevoClienteDefensa( Request $request)
    {

        //  dd($request);

         $nuevoCliente = Clientes::create($request->cliente );
         $nuevaDireccion = $request->cliente['direcciones'];
         $nuevaTareasEstandar = $request->cliente['tereas_estandar'];
         $nuevaSubTareasPredifinidas = $request->cliente['sub_tareas_predefinidas'];

         foreach( $nuevaDireccion  as $i => $direccion ){

             $nuevaDireccion[$i]['fk_id_clientes'] = $nuevoCliente->id;
             $nuevaDireccion = Direcciones::create( $nuevaDireccion[$i] );

             foreach( $direccion['telefonos'] as $j => $telefonos ){

                 $direccion['telefonos'][$j]['fk_id_direcciones'] = $nuevaDireccion->id;
                 $nuevoTelefono = Telefonos::create( $direccion['telefonos'][$j]);

             }
         }

        foreach( $nuevaTareasEstandar as $k => $tareaEstandar ){

             $nuevaTareasEstandar[$k]['fk_id_clientes'] = $nuevoCliente->id;
             $nuevoTareasEstandar = ClientesTareasEstandar::create( $nuevaTareasEstandar[$k]) ;

         }

         foreach( $nuevaSubTareasPredifinidas as $k => $subTareaPredefinida ){

            $nuevaSubTareasPredifinidas[$k]['fk_id_clientes'] = $nuevoCliente->id;
            $nuevoSubTareasPredifinidas = ClientesSubTareasPredefinidas::create( $nuevaSubTareasPredifinidas[$k]) ;

        }

        return "Exito papuuuus";

    }

    public function editarClienteDefensa( Request $request)
    {

        // dd($request);

        Clientes::where('id',$request->cliente['id'])->update($request->cliente );


        foreach( $request->direcciones as $direccion ){
            Direcciones::where('id',$direccion['id'])->update($direccion);
        }

        foreach( $request->telefonos  as $telefono ){

            Telefonos::where('id',$telefono['id'])->update($telefono);
        }

        ClientesTareasEstandar::where('fk_id_clientes',$request->cliente['id'])->update([
            'activo' => 0
        ]);

        if( isset($request->tereas_estandar) ){

            foreach( $request->tereas_estandar  as $i => $tareasEstandar ){

                ClientesTareasEstandar::updateOrCreate(
                    ['fk_id_clientes' => $request->cliente['id'], 'fk_id_tareas_estandar' => $tareasEstandar['fk_id_tareas_estandar'] ],
                    ['activo' => 1]
                );
            }

        }

        ClientesSubTareasPredefinidas::where('fk_id_clientes',$request->cliente['id'])->update([
            'activo' => 0
        ]);

        if( isset($request->sub_tareas_predefinidas) ){

            foreach( $request->sub_tareas_predefinidas  as $i => $tareasPredefinidas ){

                ClientesSubTareasPredefinidas::updateOrCreate(
                    ['fk_id_clientes' => $request->cliente['id'], 'fk_id_sub_tareas_predefinidas' => $tareasPredefinidas['fk_id_sub_tareas_predefinidas'] ],
                    ['activo' => 1]
                );
            }

        }

        return "Exito papuuuus2";

    }

    public function eliminarCliente( Request $request )
    {
        Clientes::where('id',$request->id)->update( ['activo' => 0,'eliminado' => 1 ] );

        return "Exito papuuuus3";
    }

}

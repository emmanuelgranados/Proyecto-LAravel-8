<?php

namespace App\Http\Controllers\Prospectos;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\ClientesObligaciones;
use App\Models\ClientesTareasEstandar;
use App\Models\Direcciones;
use App\Models\Estados;
use App\Models\Paises;
use App\Models\Telefonos;
use Illuminate\Http\Request;


class ProspectosContabilidadController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {



        $clientes = Clientes::all();
        $paises = Paises::all();
        $estados = Estados::all();

        return view('prospectos/prospectos_contabilidad',[
            'clientes'=>$clientes,
            'paises' => $paises,
            'estados' => $estados

        ]);

    }

    public function nuevoProspectoContabilidad( Request $request)
    {
          // dd($request);
        $nuevoCliente = Clientes::create($request->cliente );
        $nuevaDireccion = $request->cliente['direcciones'];

        foreach( $nuevaDireccion  as $i => $direccion ){

            $nuevaDireccion[$i]['fk_id_clientes'] = $nuevoCliente->id;
            $nuevaDireccion = Direcciones::create( $nuevaDireccion[$i] );

            foreach( $direccion['telefonos'] as $j => $telefonos ){

                $direccion['telefonos'][$j]['fk_id_direcciones'] = $nuevaDireccion->id;
                $nuevoTelefono = Telefonos::create( $direccion['telefonos'][$j]);

            }
        }

        if( isset($request->cliente['obligaciones']) ){

            $nuevaObligaciones = $request->cliente['obligaciones'];

            foreach( $nuevaObligaciones as $j => $obligacion ){

                $nuevaObligaciones[$j]['fk_id_clientes'] = $nuevoCliente->id;
                $nuevoObligacion = ClientesObligaciones::create( $nuevaObligaciones[$j] );

            }

        }

        if( isset( $request->cliente['tereas_estandar'] ) ){

            $nuevaTareasEstandar = $request->cliente['tereas_estandar'];

            foreach( $nuevaTareasEstandar as $k => $tareaEstandar ){

                $nuevaTareasEstandar[$k]['fk_id_clientes'] = $nuevoCliente->id;
                $nuevoTareasEstandar = ClientesTareasEstandar::create( $nuevaTareasEstandar[$k]) ;

            }

        }



        return "Exito papuuuus";

    }

    public function editarProspectoContabilidad( Request $request)
    {
        // dd($request);
        Clientes::where('id',$request->cliente['id'])->update($request->cliente );

        foreach( $request->direcciones as $direccion ){
            Direcciones::where('id',$direccion['id'])->update($direccion);
        }

        foreach( $request->telefonos  as $telefono ){
            Telefonos::where('id',$telefono['id'])->update($telefono);
        }

        ClientesObligaciones::where('fk_id_clientes',$request->cliente['id'])->update([
            'activo' => 0
        ]);

        if( isset($request->obligaciones) ){

            foreach( $request->obligaciones  as $i => $obligaciones ){

                ClientesObligaciones::updateOrCreate(
                    ['fk_id_clientes' => $request->cliente['id'], 'fk_id_obligaciones' => $obligaciones['fk_id_obligaciones'] ],
                    ['activo' => 1]
                );
            }

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

        return "Exito papuuuus2";

    }

    public function eliminarProspectoContabilidad( Request $request )
    {
        Clientes::where('id',$request->id)->update( ['activo' => 0,'eliminado' => 1 ] );

        return "Exito papuuuus3";
    }

    public function convertirPropectoContabilidad( Request $request )
    {
        Clientes::where('id',$request->id)->update( ['prospecto' => 0 ] );

        return "Exito papuuuus4";
    }

}

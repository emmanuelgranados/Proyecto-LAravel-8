<?php

namespace App\Http\Controllers\Defensa;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Direcciones;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Paises;
use App\Models\Telefonos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    public function nuevoCliente( Request $request)
    {

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

        return "Exito papuuuus";

    }

    public function editarCliente( Request $request)
    {

        Clientes::where('id',$request->cliente['id'])->update($request->cliente );

        foreach( $request->direcciones as $direccion ){
            Direcciones::where('id',$direccion['id'])->update($direccion);
        }

        foreach( $request->telefonos  as $telefono ){
            Telefonos::where('id',$telefono['id'])->update($telefono);
        }



        return "Exito papuuuus2";

    }

    public function eliminarCliente( Request $request )
    {
        Clientes::where('id',$request->id)->update( ['activo' => 0,'eliminado' => 1 ] );

        return "Exito papuuuus3";
    }

}

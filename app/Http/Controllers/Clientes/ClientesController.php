<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Direcciones;
use App\Models\Telefonos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClientesController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {


        $clientes = Clientes::all();

        return view('clientes/clientes',['clientes'=>$clientes]);

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

    public function eliminarCliente()
    {

    }

}

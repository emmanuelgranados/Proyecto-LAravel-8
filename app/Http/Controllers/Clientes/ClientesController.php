<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
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
        // dd( $request->cliente );

        $nuevoCliente = Clientes::create($request->cliente );

        dd($nuevoCliente);

    }

    public function actualizarCliente()
    {

    }

    public function eliminarCliente()
    {

    }

}

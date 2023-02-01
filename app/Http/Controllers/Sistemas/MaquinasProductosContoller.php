<?php

namespace App\Http\Controllers\Sistemas;

use App\Models\Maquinas;
use App\Models\MaquinasProductos;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MaquinasProductosContoller extends Controller
{
    public function index(){



        $maquinas = Maquinas::where('activo',1)->where('eliminado',0);

        $productos = Productos::where('activo',1)->where('eliminado',0);

        return view('sistemas.prueba.maquinaproductos',[
            'maquinas' => $maquinas,'productos' => $productos]);
    }

    public function lista_productos(Request $request){
        return response()->json(MaquinasProductos::select('maquina_productos.id',
        'maquinas.nombre as maquina',
        'productos.nombre as producto')
->leftjoin('maquinas','maquinas.id','=', 'maquina_productos.fk_id_maquina')
->leftjoin('productos','productos.id','=', 'maquina_productos.fk_id_productos')
->where('maquina_productos.activo',1)
->where('maquina_productos.eliminado',0)
->get());



    }

}

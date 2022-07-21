<?php

namespace App\Http\Controllers\Sistemas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Marcas;
use App\Models\Inventario;
use Carbon\Carbon;

class InventarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        return view('sistemas/inventario/inventario',[
                    'marcas' => Marcas::select('id','marca')->where('activo',1)->get(),
                    'users' => User::select('id','name')->where('activo',1)->get()]);
     }


     public function nuevo_equipo(Request $request){
        // dd($request);

        Inventario::create([
            'nombre_equipo' => $request['nombre_equipo'],
            'fk_id_marcas' => $request['fk_id_marcas'],
            'fk_id_users' => $request['fk_id_users'],
            'mac_address' => $request['mac_address'],
            'mac_wifi' => $request['mac_wifi'],
            'serial_key_windows' => $request['serial_key_windows'],
            'sistema_operativo' => $request['sistema_operativo'],
            'modelo' => $request['modelo'],
            'memoria_ram' => $request['memoria_ram'],
            'disco_duro' => $request['disco_duro'],
            'procesador' => $request['procesador'],
            'numero_de_serie' => $request['numero_de_serie'],
            'garantia' => $request['garantia'],
            'licencia_office' => $request['licencia_office'],
            'fecha_alta' =>Carbon::now(),
            'fecha_asignacion' =>Carbon::now(),
            'tipo' => $request['tipo'],
            'status' => $request['status'],
            'fecha_garantia' => $request['fecha_garantia'],
            'eliminado' => 0,
       ]);

       return "Exito";

     }




}

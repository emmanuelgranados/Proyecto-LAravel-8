<?php

namespace App\Http\Controllers\Sistemas;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Marcas;
use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\HistorialInventario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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


     public function salida_equipo($id){

        if(Auth::user()->hasRole('sistemas')){

        $user=Auth::user()->id;

        $status = Inventario::select('fk_id_users','status')->where('id',$id)->where('eliminado',0)->get();
        $usuarioAsignado = $status[0]->fk_id_users;

        switch($status[0]->status){

        case "0":

            Inventario::where('id',$id)->update(['fk_id_users'=> $user,'status' => 1]);

            HistorialInventario::create([
                'fecha' =>Carbon::now(),
                'evento' => 1,
                'fk_id_inventario' => $id,
                'fk_id_users' => $user,
                'fk_id_users_adquiere' => $usuarioAsignado,
                'eliminado' => 0,
               ]);

        break;

        case "1":

            Inventario::where('id',$id)->update(['status' => 0]);

            HistorialInventario::create([
                'fecha' =>Carbon::now(),
                'evento' => 0,
                'fk_id_inventario' => $id,
                'fk_id_users' => $user,
                'fk_id_users_adquiere' => $usuarioAsignado,
                'eliminado' => 0,
               ]);

        break;


          }

          return redirect()->route('inventario')->with('message', ['type'=> 'success', 'text' => 'Registro Actualizado.', 'title' => 'Exito!']);

        }

        return redirect()->route('inicio')->with('message', ['type'=> 'success', 'text' => 'Acceso Denegado.', 'title' => 'Exito!']);

     }



}

<?php

namespace App\Http\Controllers\Catalogos;

use App\Models\Obligaciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ObligacionesController extends Controller
{

public function index(){

    return view('catalogos.obligaciones.obligaciones');

 }

 public function new_obligaciones(Request $request){
       Obligaciones::create([
        'obligacion' => $request['obligacion'],
        'elimindo' =>0,
        'activo' => 1,
   ]);

   return "Exito";

 }

 public function edit_obligaciones(Request $request){

    Obligaciones::where('id',$request->id)->update( ['obligacion' => $request['obligacion']] );

    return "Exito";

 }

 public function delete_obligaciones(Request $request){

    Obligaciones::where('id',$request->id)->update( ['eliminado' => 1] );

    return "Exito";

 }

 public function bloquear_obligaciones(Request $request){

    Obligaciones::where('id',$request->id)->update( ['activo' => 0] );

    return "Exito";

 }


 public function desbloquear_obligaciones(Request $request){

    Obligaciones::where('id',$request->id)->update( ['activo' => 1] );

    return "Exito";

 }

}

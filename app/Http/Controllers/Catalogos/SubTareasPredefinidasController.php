<?php

namespace App\Http\Controllers\Catalogos;

use Illuminate\Http\Request;
use App\Models\TareasPredefinidas;
use App\Http\Controllers\Controller;
use App\Models\SubTareasPredefinidas;

class SubTareasPredefinidasController extends Controller
{
    public function index(){


        $tareas =  TareasPredefinidas::select('tareas_predefinidas.id',
                                              'tareas_predefinidas.tarea_predefinida',
                                              'categorias_tareas.categoria_tarea as categoria',
                                              'tareas_predefinidas.activo')
                    ->leftjoin('categorias_tareas','categorias_tareas.id','=', 'tareas_predefinidas.fk_id_categorias_tareas')
                    ->where('tareas_predefinidas.eliminado',0)
                    ->where('tareas_predefinidas.activo',1)
                    ->get();

        return view('catalogos.subtareas_predeterminadas.subtareas_predefinidas',['tareas'=>$tareas,]);

     }

     public function new_subtareas_predefinidas(Request $request){

        // dd($request);
        SubTareasPredefinidas::create([
            'sub_tarea_predefinida' => $request['sub_tarea_predefinida'],
            'fk_id_tareas_predefinidas' => $request['fk_id_tareas_predefinidas'],
            'activo' => 1,
       ]);

       return "Exito";

     }

     public function edit_subtareas_predefinidas(Request $request){

        SubTareasPredefinidas::where('id',$request->id)->update(
            ['sub_tarea_predefinida' => $request['sub_tarea_predefinida'],
             'fk_id_tareas_predefinidas' => $request['fk_id_tareas_predefinidas'],] );

        return "Exito";

     }

     public function delete_subtareas_predefinidas(Request $request){

        SubTareasPredefinidas::where('id',$request->id)->update( ['eliminado' => 1] );

        return "Exito";

     }


     public function bloquear_subtareas_predefinidas(Request $request){

        SubTareasPredefinidas::where('id',$request->id)->update( ['activo' => 0] );

        return "Exito";

     }


     public function desbloquear_subtareas_predefinidas(Request $request){

        SubTareasPredefinidas::where('id',$request->id)->update( ['activo' => 1] );

        return "Exito";

     }
}

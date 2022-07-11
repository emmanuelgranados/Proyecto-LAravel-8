<?php

namespace App\Http\Controllers\Catalogos;

use Illuminate\Http\Request;
use App\Models\CategoriaTarea;
use App\Models\TareasPredefinidas;
use App\Http\Controllers\Controller;

class TareasPredefinidasController extends Controller
{


    public function index(){

        return view('catalogos.tareas_predeterminadas.tareas_predeterminadas',
        ['categorias'=>CategoriaTarea::select('id','categoria_tarea','activo')->where('eliminado',0)->get()]);

     }

     public function new_tareas_predefinidas(Request $request){
        TareasPredefinidas::create([
            'tarea_predefinida' => $request['tarea_predefinida'],
            'fk_id_categorias_tareas' => $request['fk_id_categorias_tareas'],
            'activo' => 1,
       ]);

       return "Exito";

     }

     public function edit_tareas_predefinidas(Request $request){

        TareasPredefinidas::where('id',$request->id)->update(
            ['tarea_predefinida' => $request['tarea_predefinida'],
             'fk_id_categorias_tareas' => $request['fk_id_categorias_tareas'],] );

        return "Exito";

     }

     public function delete_tareas_predefinidas(Request $request){

        TareasPredefinidas::where('id',$request->id)->update( ['eliminado' => 1] );

        return "Exito";

     }


     public function bloquear_tareas_predefinidas(Request $request){

        TareasPredefinidas::where('id',$request->id)->update( ['activo' => 0] );

        return "Exito";

     }


     public function desbloquear_tareas_predefinidas(Request $request){

        TareasPredefinidas::where('id',$request->id)->update( ['activo' => 1] );

        return "Exito";

     }



}

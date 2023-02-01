
<?php

use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\MaquinasProductos;
use App\Models\HistorialInventario;

Route::get('/lista_inventario', function (Request $request) {

return Inventario::with('marca','user')
->where('eliminado',0)
->get();
});


Route::get('/datos_equipo', function (Request $request) {

    return Inventario::with('marca','user')
    ->where('eliminado',0)
    ->where('id',$request->id)
    ->get();
    });


Route::get('/historial_equipo', function (Request $request) {

    return HistorialInventario::with('equipo','user','userAdquiere')
    ->where('eliminado',0)
    ->where('fk_id_inventario',$request->id)
    ->get();
    });





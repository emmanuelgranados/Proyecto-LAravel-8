
<?php

use App\Models\Inventario;
use Illuminate\Http\Request;

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


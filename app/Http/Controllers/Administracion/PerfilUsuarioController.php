<?php

namespace App\Http\Controllers\Administracion;

use App\Models\User;
use App\Models\Estados;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PerfilRequest;
use Illuminate\Support\Facades\Storage;

class PerfilUsuarioController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');

    }

    public function index()
    {

        return view('administracion/perfilusuario',['estados' => Estados::select('id','estado')->get(),
                                                    'foto'=>User::select('foto')->get()]);
     }



public function editar_perfil(Request $request){

    // dd($request);
    $datos= collect($request->all())->except('_token');

    if($request->file('foto') === null){


    try{
    User::where('id',$datos['id'])->update( ['name' => $datos['name'],
    'email' => $datos['email'],
    'phone' => $datos['phone'],
    'message' => $datos['message'],
    'fk_id_estado' => $datos['estado'],] );
    }catch(Throwable $th){
    dd("Error de Inserción",$th);
    }
    return redirect()->route('perfilUsuario')->with('message', ['type'=> 'success', 'text' => 'Se agrego visita con exito .', 'title' => 'Exito!']);

   }else{

    $file = $request->file('foto');
    //obtenemos el nombre del archivo
    $nombre =  time()."_".$file->getClientOriginalName();

    //indicamos que queremos guardar un nuevo archivo en el disco local
    Storage::disk('usuarios')->put($nombre,  \File::get($file));

    try{

    User::where('id',$request['id'])->update( ['name' => $request['name'],
    'email' => $request['email'],
    'phone' => $request['phone'],
    'message' => $request['message'],
    'foto'=> $nombre,
    'fk_id_estado' => $request['estado'],] );

    }catch(Throwable $th){
    dd("Error de Inserción",$th);
    }
    return redirect()->route('perfilUsuario')->with('message', ['type'=> 'success', 'text' => 'Se agrego visita con exito .', 'title' => 'Exito!']);

}


}

}

<?php

namespace App\Http\Controllers\Administracion;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Estados;

class PerfilUsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $id=Auth::user()->id;
        $estado=Auth::user()->fk_id_estado;

        return view('administracion/perfilusuario',['user' => User::select('foto')->where('id',$id)->get(),
                                                    'estado' => Estados::select('estado')->where('id',$estado)->get(),
                                                    'roles'=>Roles::select()->where('activo',1)->where('eliminado',0)->get()]);
     }

}

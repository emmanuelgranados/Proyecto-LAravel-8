<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PerfilUsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $id=Auth::user()->id;

        return view('administracion/perfilusuario',['user' => User::select('foto')->where('id',$id)->get()]);
     }

}

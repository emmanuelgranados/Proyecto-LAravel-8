<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Direcciones;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Paises;
use App\Models\Telefonos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportesController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        return view('reportes/reportes');

    }


}

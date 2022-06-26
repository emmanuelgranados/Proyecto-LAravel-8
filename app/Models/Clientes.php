<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'clientes';

    protected $fillable = [
        'nombre_razon_social',
        'rfc',
        'email',
        'pagina_web',
        'activo',
        'eliminado'
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientesTareasEstandar extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'clientes_tareas_estandar';

    protected $fillable = [
        'fk_id_tareas_estandar',
        'fk_id_clientes',
        'activo',
    ];


}

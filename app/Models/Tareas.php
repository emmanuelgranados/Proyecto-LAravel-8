<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{

    public $timestamps = false;

    protected $table = 'tareas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tarea',
        'fk_id_clientes',
        'fk_id_prioridades',
        'fk_id_users_alta',
        'fk_id_users_asignado',
        'fecha_inicio',
        'fecha_final',
        'fecha_registro',
        'fk_id_estatus',
        'eliminado'
     ];



}


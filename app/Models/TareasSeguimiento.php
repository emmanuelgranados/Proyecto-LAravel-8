<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TareasSeguimiento extends Model
{

    public $timestamps = false;

    protected $table = 'tareas_seguimiento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_tareas',
        'fk_id_acciones_tareas',
        'fecha',
        'fk_id_clientes',
        'fk_id_prioridades',
        'fk_id_users',
        'fk_id_users_alta',
        'fk_id_users_asignado',
        'fecha_inicio',
        'fecha_final',
        'fecha_registro',
        'fk_id_sub_tareas_predefinidas',
        'fk_id_obligaciones',
        'fk_id_tareas_estandar',
        'fecha_sub_tarea',
        'sub_tarea',
        'fk_id_estatus',
        'eliminado'
     ];


}


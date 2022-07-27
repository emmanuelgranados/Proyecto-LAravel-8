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
        'fecha_registro',
     ];


}


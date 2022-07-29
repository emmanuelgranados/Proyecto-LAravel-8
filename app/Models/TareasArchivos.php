<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TareasArchivos extends Model
{

    public $timestamps = false;

    protected $table = 'tareas_archivos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_tareas',
        'nombre_archivo',
        'fecha_registro',
        'eliminado'
     ];



}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareasEstandar extends Model
{

    public $timestamps = false;

    protected $table = 'tareas_estandar';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tarea_estandar',
        'activo',
        'eliminado'
     ];




}


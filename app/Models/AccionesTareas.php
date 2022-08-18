<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccionesTareas extends Model
{

    public $timestamps = false;

    protected $table = 'acciones_tareas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'accion_tarea'
     ];


}

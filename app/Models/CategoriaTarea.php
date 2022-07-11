<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaTarea extends Model
{

    public $timestamps = false;

    protected $table = 'categorias_tareas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'categoria_tarea',
        'activo',
        'eliminado'
     ];


}

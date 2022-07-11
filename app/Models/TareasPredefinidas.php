<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareasPredefinidas extends Model
{

    public $timestamps = false;

    protected $table = 'tareas_predefinidas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tarea_predefinida',
        'fk_id_categorias_tareas',
        'activo',
        'eliminado'
     ];


    public function subTareasPredefinidas()
    {
        return $this->hasMany(SubTareasPredefinidas::class, 'fk_id_tareas_predefinidas','id');
    }


}


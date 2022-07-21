<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubTareasPredefinidas extends Model
{

    public $timestamps = false;

    protected $table = 'sub_tareas_predefinidas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'sub_tarea_predefinida',
        'fk_id_tareas_predefinidas',
        'activo',
        'eliminado',
        'campo'
     ];

     public function tareasPredefinidas(){
        return $this->hasOne(TareasPredefinidas::class,'id','fk_id_tareas_predefinidas');
     }

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientesSubTareasPredefinidas extends Model
{

    public $timestamps = false;

    protected $table = 'clientes_sub_tareas_predefinidas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_sub_tareas_predefinidas',
        'fk_id_clientes',
        'activo'
     ];


     public function subTareasPredefinidas(){
        return $this->hasOne(SubTareasPredefinidas::class,'id','fk_id_sub_tareas_predefinidas');
     }

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'fk_id_sub_tareas_predefinidas',
        'fk_id_obligaciones',
        'fk_id_tareas_estandar',
        'fecha_sub_tarea',
        'sub_tarea',
        'fk_id_estatus',
        'eliminado'
     ];


    public function clientes(){
        return $this->belongsTo( Clientes::class,'fk_id_clientes','id' );
    }

    public function prioridades(){
        return $this->belongsTo( Prioridades::class,'fk_id_prioridades','id' );
    }

    public function usuariosAlta(){
        return $this->belongsTo( User::class,'fk_id_users_alta','id' );
    }

    public function usuariosAsignado(){
        return $this->belongsTo( User::class,'fk_id_users_asignado','id' );
    }

    public function estatus(){
        return $this->belongsTo( Estatus::class,'fk_id_estatus','id' );
    }

    public function subTareasPredefinidas(){
        return $this->hasOne( SubTareasPredefinidas::class,'id','fk_id_sub_tareas_predefinidas' );
    }

    public function obligaciones(){
        return $this->hasOne( Obligaciones::class,'id','fk_id_obligaciones' );
    }

    public function tareasEstandar(){
        return $this->hasOne( TareasEstandar::class,'id','fk_id_tareas_estandar' );
    }

    public function comentarios(){
        return $this->hasMany( Comentarios::class,'fk_id_tareas','id' );
    }

    public function archivos(){
        return $this->hasMany( TareasArchivos::class,'fk_id_tareas','id' );
    }

}


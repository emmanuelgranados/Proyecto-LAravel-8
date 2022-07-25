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
        'fk_id_estatus',
        'fecha_sub_tarea',
        'sub_tarea',
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


}


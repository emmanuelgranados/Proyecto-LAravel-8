<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'clientes';

    protected $fillable = [
        'nombre_cliente',
        'razon_social',
        'rfc',
        'email',
        'fecha_ingreso',
        'fk_id_usuario_asignado',
        'tipo_servicio',
        'prospecto',
        'activo',
        'eliminado'
    ];

    public function direcciones()
    {
        return $this->hasMany(Direcciones::class, 'fk_id_clientes','id');
    }

    public function usuario(){
        return $this->hasOne(User::class,'id','fk_id_usuario_asignado');
    }

}

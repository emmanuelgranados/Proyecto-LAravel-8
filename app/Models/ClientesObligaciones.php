<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientesObligaciones extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'clientes_obligaciones';

    protected $fillable = [
        'fk_id_obligaciones',
        'fk_id_clientes',
        'activo',
    ];

    public function obligaciones(){
        return $this->hasOne(Obligaciones::class,'id','fk_id_obligaciones');
     }

}

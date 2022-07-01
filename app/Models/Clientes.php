<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'clientes';

    protected $fillable = [
        'nombre_razon_social',
        'rfc',
        'email',
        'pagina_web',
        'prospecto',
        'activo',
        'eliminado'
    ];

    public function direcciones()
    {
        return $this->hasMany(Direcciones::class, 'fk_id_clientes','id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'direcciones';

    protected $fillable = [
        'fk_id_clientes',
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'fk_id_paises',
        'fk_id_estados',
        'fk_id_municipios',
        'fk_id_codigos_postales',
        'activo',
        'eliminado'
    ];

    public function pais()
    {
        return $this->hasOne(Paises::class,'id','fk_id_paises');
    }
    public function estado()
    {
        return $this->hasOne(Estados::class, 'id', 'fk_id_estados');
    }
    public function municipio()
    {
        return $this->hasOne(Municipios::class, 'id', 'fk_id_municipios');
    }

    public function telefonos()
    {
        return $this->hasMany(Telefonos::class,'fk_id_direcciones','id');
    }
}

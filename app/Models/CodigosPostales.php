<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodigosPostales extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'codigos_postales';

    protected $fillable = [
        'fk_id_estados',
        'estado',
        'fk_id_municipios',
        'municipio',
        'ciudad',
        'zona',
        'cp',
        'asentamiento',
        'tipo',
    ];



}

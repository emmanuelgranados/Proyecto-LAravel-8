<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'municipios';

    protected $fillable = [
        'fk_id_estados',
        'municipio',
    ];


}

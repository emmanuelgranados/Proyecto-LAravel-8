<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefonos extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'telefonos';

    protected $fillable = [
        'fk_id_direcciones',
        'telefono'
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obligaciones extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'obligaciones';

    protected $fillable = [
        'obligacion',
        'activo',
        'eliminado',
    ];



}

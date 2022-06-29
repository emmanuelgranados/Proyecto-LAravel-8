<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prioridades extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'prioridades';

    protected $fillable = [
        'prioridad',
    ];


}

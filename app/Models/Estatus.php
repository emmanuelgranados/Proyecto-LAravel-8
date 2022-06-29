<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estatus extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'estatus';

    protected $fillable = [
        'estatus',
    ];


}

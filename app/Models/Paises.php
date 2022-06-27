<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paises extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'paises';

    protected $fillable = [
        'pais',
    ];


}

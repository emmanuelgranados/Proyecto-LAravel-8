<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends  Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'estados';

    protected $fillable = [
        'fk_id_paises',
        'estado',
    ];


}

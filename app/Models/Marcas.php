<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'marcas';

    protected $fillable = [
        'marca',
        'activo',
        'eliminado'
    ];


}

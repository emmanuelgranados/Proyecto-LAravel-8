<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinas extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'maquinas';

    protected $fillable = [
        'nombre',
        'activo',
        'eliminado'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maquinas;
use App\Models\Productos;

class MaquinasProductos extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'maquina_productos';

    protected $fillable = [
        'fk_id_maquina',
        'fk_id_productos',
        'activo',
        'eliminado'
    ];



}


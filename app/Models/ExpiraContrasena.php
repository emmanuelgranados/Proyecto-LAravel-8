<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpiraContrasena extends Model
{

    protected $table = 'expira_contrasenas';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'fk_id_usuario',
        'dias_expiracion',
        'ultimo_update'
    ];
}

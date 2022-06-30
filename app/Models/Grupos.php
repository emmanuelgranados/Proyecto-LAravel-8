<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Grupos extends Model
{


    protected $primaryKey = 'id';

    protected $table = 'grupos';

    protected $fillable = [
        'name',
        'fk_id_users',
        'activo',
        'eliminado',
        'created_at',
        'updated_at'
    ];



}

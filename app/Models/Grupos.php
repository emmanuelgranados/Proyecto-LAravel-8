<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Grupos extends Model
{


    protected $primaryKey = 'id';

    protected $table = 'grupos';

    protected $fillable = [
        'name',
        'lider_fk_id',
        'activo',
        'eliminado',
        'created_at',
        'updated_at'
    ];



}

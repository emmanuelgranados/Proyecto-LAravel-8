<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Grupos extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'grupos';

    protected $fillable = [
        'name',
        'activo',
        'eliminado'
    ];



}

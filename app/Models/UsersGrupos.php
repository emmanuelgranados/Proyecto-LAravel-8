<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersGrupos extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'users_grupos';

    protected $fillable = [
        'fk_id_users',
        'fk_id_grupos',
        'activo',
        'eliminado'
    ];


}

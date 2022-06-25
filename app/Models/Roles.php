<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Roles extends Model
{

    protected $table = 'roles';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombreRol',
        'activo' ];


        public function users() {
            return $this
                ->belongsToMany('App\Models\User')
                ->withTimestamps();
        }

}


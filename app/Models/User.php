<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;
use App\Models\Estados;

class User extends  Authenticatable
{

    // public $timestamps = false;

   protected $table = 'users';

    protected $fillable = [
        'name',
        'phone',
        'message',
        'fk_id_estado',
        'email',
        'password',
        'foto',
        'activo',
        'eliminado'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany('App\Models\Roles','role_user', 'user_id', 'role_id')->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }


    public function estado()
    {
        return $this->belongsTo(Estados::class,'fk_id_estado','id');
    }
}

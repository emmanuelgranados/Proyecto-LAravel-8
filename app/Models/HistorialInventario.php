<?php

namespace App\Models;

use App\Models\User;
use App\Models\Inventario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistorialInventario extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'historial_inventario';

    protected $fillable = [
        'fecha',
        'evento',
        'fk_id_inventario',
        'fk_id_users',
        'fk_id_users_adquiere',
        'eliminado',

    ];


    public function user(){
        return $this->belongsTo(User::class,'fk_id_users','id');
    }
    public function userAdquiere(){
        return $this->belongsTo(User::class,'fk_id_users_adquiere','id');
    }

    public function equipo(){
        return $this->belongsTo(Inventario::class,'fk_id_inventario','id');
    }



}

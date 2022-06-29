<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{

    public $timestamps = false;

    protected $table = 'comentarios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'comentario',
        'fk_id_tareas',
        'fk_id_users',
        'fecha',
        'eliminado'
     ];


     public function usuarios()
     {
         return $this->belongsTo(User::class, 'fk_id_users', 'id');
     }



}


<?php

namespace App\Models;


use App\Models\User;
use App\Models\Marcas;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'inventario';

    protected $fillable = [
        'nombre_equipo',
        'fk_id_marcas',
        'fk_id_users',
        'mac_address',
        'mac_wifi',
        'serial_key_windows',
        'sistema_operativo',
        'modelo',
        'memoria_ram',
        'disco_duro',
        'procesador',
        'numero_de_serie',
        'garantia',
        'licencia_office',
        'fecha_alta',
        'tipo',
        'status',
        'fecha_asignacion',
        'fecha_garantia',
         'eliminado',

    ];


    public function marca(){
        return $this->belongsTo(Marcas::class,'fk_id_marcas','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'fk_id_users','id');
    }


}

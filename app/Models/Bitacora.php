<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Use_;

class Bitacora extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bitacora',
        'id_users',
        'contexto_Evento',
        'nombre_Evento',
        'hora_accion',
        'ip_Equipo',        
    ];

    //relacion Usuarios
    public function relacionUsuarios(){
        return $this->belongsTo(User::class, 'id_users');
    }

}

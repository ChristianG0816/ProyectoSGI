<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_proveedor',
        'nombre_Proveedor',
        'apellido_Proveedor',
        'direccion_Proveedor',
        'telefono_Proveedor',
        'correo_Proveedor',
           
    ];

    //Relacion 1 a muchos con Insumo
    public function relacionInsumo(){
        return $this->hasMany(Insumo::class);
    }

}

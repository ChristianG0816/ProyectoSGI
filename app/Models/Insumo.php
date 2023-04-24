<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_insumo',
        'id_proveedor',
        'nombre_Insumo',
        'costo_Unitario_Insumo',
    ];

    //relacion Proveedor
    public function relacionProveedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    //Relacion 1 a muchos con Servicio_Insumo
    public function relacionServicio_Insumo(){
        return $this->hasMany(ServicioInsumo::class);
    }

}

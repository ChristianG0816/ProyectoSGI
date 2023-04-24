<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_servicio',
        'nombre_Servicio',
        'descripcion_Servicio',
        'costo_Servicio',
        'precio_Venta_Servicio',
        'tiempo_Entrega_Servicio',
    ];

    //Relacion 1 a muchos con Servicio_Insumo
    public function relacionServicio_Insumo(){
        return $this->hasMany(ServicioInsumo::class);
    }

    //Relacion 1 a muchos con Venta
    public function relacionVenta(){
        return $this->hasMany(Venta::class);
    }
}

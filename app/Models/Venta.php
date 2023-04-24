<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_venta',
        'id_servicio',
        'id_empleado',
        'fecha_Venta',
        'cantidad_Venta',
        'neto_Venta',
        'iva_Venta',
        'total_Venta',        
    ];

   //relacion Servicio
   public function relacionServicio(){
    return $this->belongsTo(Servicio::class, 'id_servicio');
   }

    //relacion Empleado
    public function relacionEmpleado(){
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

}

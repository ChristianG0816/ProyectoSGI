<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_empleado',
        'dui_Empleado',
        'nombre_Empleado',
        'apellido_Empleado',
        'salario_Empleado',
        'contratacion_Empleado',        
    ];

    //Relacion 1 a muchos con venta
    public function relacionVenta(){
        return $this->hasMany(Venta::class);
    }

    
}

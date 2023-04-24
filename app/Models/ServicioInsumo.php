<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioInsumo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_insumo',
        'id_proveedor',
        'id_servicio',      
    ];

    //relacion Insumo
    public function relacionInsumo(){
        return $this->belongsTo(Insumo::class, 'id_insumo');
    }

    //relacion TipoCuenta
    public function relacionServicio(){
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'tipo', 'nombre_hotel'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'nombre_hotel');
    }

    public function reservasAgencia()
    {
        return $this->belongsToMany(Agencia::class, 'reservas_agencia', 'codigo_habitacion', 'codigo_agencia')->withPivot('fecha_ini', 'fecha_fin', 'facturas')->withTimestamps();
    }

    public function reservasParticular()
    {
        return $this->belongsToMany(Particular::class, 'reservas_particular', 'codigo_habitacion', 'codigo_particular')->withPivot('fecha_ini', 'fecha_fin', 'facturas')->withTimestamps();
    }
}

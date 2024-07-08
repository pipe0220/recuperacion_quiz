<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','direccion','tfno'];
    public function reservas()
    {
        return $this->belongsToMany(Habitacion::class, 'reservas_particular', 'codigo_particular', 'codigo_habitacion')->withPivot('fecha_ini', 'fecha_fin', 'facturas')->withTimestamps();
    }
}



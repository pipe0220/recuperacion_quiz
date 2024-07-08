<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'tfno', 'direccion', 'persona_contacto'];

    public function reservas()
    {
        return $this->belongsToMany(Habitacion::class, 'reservas_agencia', 'codigo_agencia', 'codigo_habitacion')->withPivot('fecha_ini', 'fecha_fin', 'facturas')->withTimestamps();
    }
}

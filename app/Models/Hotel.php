<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'tfno', 'año_construcción', 'codigo_categoria'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'codigo_categoria');
    }

    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class, 'nombre_hotel');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'iva'];

    public function hoteles()
    {
        return $this->hasMany(Hotel::class, 'codigo_categoria');
    }
}

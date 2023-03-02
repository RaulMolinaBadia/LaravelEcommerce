<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'precio', 'id_categoria'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

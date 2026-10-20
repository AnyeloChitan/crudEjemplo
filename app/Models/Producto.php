<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    //campos que se agregan de forma masiva
    protected $fillable=[
        'nombre',
        'descripcion',
        'imagen',
        'precio',
        'precio_venta',
        'stock',
        'id_categoria'
    ];

    //relacion con categoria

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria','id');
    }

}

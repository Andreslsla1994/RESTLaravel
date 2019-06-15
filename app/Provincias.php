<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    protected $table = 'provincias';
    protected $fillable = [
        'id_provincia',
        'nombre_provincia',
        'capital_provincia',
        'descripcion_provincia',
        'poblacion_provincia',
        'superficie_provincia',
        'latitud_provincia',
        'longitud_provincia',
        'id_region'
    ];

}

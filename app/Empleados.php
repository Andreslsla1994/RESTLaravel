<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = [
        'id_empleado',
        'Nombres',
        'Apellidos',
        'Cedula',
        'Provincia',
        'FechaNacimiento',
        'Email',
        'FechaIngreso',
        'Cargo',
        'Departamento',
        'ProvinciaLaboral',
        'Sueldo',
        'JornadaParcial',
        'ObservacionesPersonales',
        'ObservacionesLaborales',
    ];

    
}

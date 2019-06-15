<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
class EmpleadosController extends Controller
{
    public function obtenerEmpleados()
    {
        $empleados = Empleados::all();
        //$empleados = Empleados::select('id_empleado','Nombres', 'Apellidos', 'Cedula')->get();
        return $empleados;
    }
    public function insertarEmpleado(Request $request)
    {
        $cedula = $request->input('Cedula');
        $empleados = Empleados::where('Cedula', '=', $cedula)->first();
        if($empleados){
            return 'Empleado existente';
        }else{
            Empleados::create($request->all());
            return 'OK';
        }
    }
    public function obtenerEmpleado(Request $request)
    {
        $id_empleado = $request->input('id_empleado');
        $Nombres = $request->input('Nombres');
        $empleados = Empleados::where('id_empleado','=',$id_empleado)
        ->orWhere('Nombres','=',$Nombres)->get();
        return $empleados;
    }
    public function editarEmpleado($id_empleado, Request $request)
    {
        $empleados = Empleados::where('id_empleado', '=', $id_empleado )
        ->update($request->all());
        return $empleados;
    }

    
}

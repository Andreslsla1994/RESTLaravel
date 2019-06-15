<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('obtenerEmpleados', 'EmpleadosController@obtenerEmpleados');
Route::post('insertarEmpleado', 'EmpleadosController@insertarEmpleado');
Route::post('obtenerEmpleado', 'EmpleadosController@obtenerEmpleado');
Route::post('editarEmpleado/{id_empleado}', 'EmpleadosController@editarEmpleado');

Route::get('obtenerProvincias', 'ProvinciasController@getAll');


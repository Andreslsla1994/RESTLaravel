<?php

namespace App\Http\Controllers;

use App\Provincias;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    public function getAll()
    {
        $provinvias = Provincias::all();
        return $provinvias;
    }
}

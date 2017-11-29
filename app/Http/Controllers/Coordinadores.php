<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCoordinadoresRequest;
use App\Coordinador;

class Coordinadores extends Controller{
    public function create(CreateCoordinadoresRequest $request){
    	$create = Coordinador::create([
    		'nombre' => $request->input('nombre'),
    		'paterno' => $request->input('paterno'),
    		'materno' => $request->input('materno'),
    		'email' => $request->input('email'),
    		'telefono' => $request->input('telefono'),
    		'grado' => $request->input('grado'), 
    		'carrera' => $request->input('carrera'),
    		'estatus' => 'ACTIVO'
    		]);
    	redirect('/coordinadores/alta');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        return view('cursos.index');    
    }

    public function crear()
    {
        return view('cursos.crear');     
    }

    public function mostrar($curso)
    {
        return view('cursos.mostrar',compact('curso'));
    }
}

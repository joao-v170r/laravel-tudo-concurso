<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    //
    public function create()
    {
        return view('concurso.create');
    }

    public function store()
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;

class DataTableController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('datatable', compact('cursos'));
    }
}

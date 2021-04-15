<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('datatable');
    }
}

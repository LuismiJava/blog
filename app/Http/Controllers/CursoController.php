<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\PruneBatchesCommand;

class CursoController extends Controller
{
    public function index(){
        
        $cursos = Curso::orderBy('id','desc')->paginate();

        return view ('cursos.index' , compact('cursos'));

       
    }

    public function create(){
        return view ('cursos.create');

    }

    public function store(StoreCurso $request){
      
     
    

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);

}
    public function show(Curso $curso){


        return view ('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){


        return view ('cursos.edit', compact('curso'));

    }

    public function update(Request $request, Curso $curso){


        $request->validate([
            'nombre'=>'required|max:10',
            'descripcion'=>'required|min:10',
            'categoria'=>'required',
             ]);


             $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);

    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index', $curso);

    }




}

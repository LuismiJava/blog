@extends('layouts.plantilla')


@section('title', 'Editar Curso')
    
@section('content')
<h1>En esta página podrás editar el curso.</h1>


  
    <form action="{{route('cursos.update', $curso)}}" method="post">


        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $curso->nombre)}}">

        </label>

        @error('nombre')
<br>
<small>*{{$message}}</small>
<br>
@enderror

        <br>
        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>

        </label>

        @error('descripcion')
<br>
<small>*{{$message}}</small>
<br>
@enderror

<br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">

        </label>

        @error('categoria')
<br>
<small>*{{$message}}</small>
<br>
@enderror

        <br>

      <button type="submit">Actualizar curso</button>
    </form>



@endsection

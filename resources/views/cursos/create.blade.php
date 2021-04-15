@extends('layouts.plantilla')


@section('title', 'Creación de cursos')
    
@section('content')
<h1>Bienvenido a la página para crear cursos</h1>


  
    <form action="{{route('cursos.store')}}" method="POST">


        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>

@error('nombre')
<br>
<small>*{{$message}}</small>
<br>
@enderror

        <br>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>

        </label>

        @error('descripcion')
<br>
<small>*{{$message}}</small>
<br>
@enderror
<br>
<br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{old('categoria')}}">

        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <br>

        <label>
            El nombre de su URL:<br>
            <input type="text" name="slug" value="{{old('slug')}}">

        </label>

      <button type="submit">Guardar curso</button>
    </form>



@endsection

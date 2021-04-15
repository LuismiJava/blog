@extends('layouts.plantilla')


@section('title', 'Tabla de Cursos')
    
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> 
@endsection

@section('content')

<div class="card">

<div class="card-body">

<h1>Estos son los cursos que tenemos disponibles</h1>

<table class="table table-striped" id="cursos">

<thead>

    <tr>

        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoría</th>
        <th>Creado en</th>

    </tr>

</thead>


@foreach ($cursos as $curso)


<tr>

    <td>{{$curso->id}}</td>
    <td>{{$curso->nombre}}</td>
    <td>{{$curso->descripcion}}</td>
    <td>{{$curso->categoria}}</td>
    <td>{{$curso->created_at->diffForHumans()}}</td>



</tr>


    
@endforeach

</table>
</div>
</div>


@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
 $('#cursos').DataTable();

</script>


@endsection

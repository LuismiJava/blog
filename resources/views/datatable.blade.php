@extends('layouts.plantilla')


@section('title', 'Tabla de Cursos')
    


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">


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
        <th>Creado</th>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>



<script>
    

 $('#cursos').DataTable({
     responsive:true,
     autoWidth:false
  

     
 });




</script>

@endsection
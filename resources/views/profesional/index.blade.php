@extends('layouts.plantillabase');

@section('contenido')
<a href="profesional/create" class="btn btn-primary">Crear</a>
<table class="table table-striped mt-4">

    <thead>

        <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero documnto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Habilidades</th>
                <th scope="col">Salario</th>
                <th scope="col">Disponible</th>
                <th scope="col">Acciones</th>
        </tr>

    </thead>

    <tbody>

        @foreach ($personas as $persona)    
        <tr>
                <td>{{$persona->id}}</td>
                <td>{{$persona->NumDocumento}}</td>
                <td>{{$persona->Nombre}}</td>
                <td>{{$persona->Apellido}}</td>
                <td>{{$persona->Habilidades}}</td>
                <td>{{$persona->Salario}}</td>
                <td>{{$persona->Disponible}}</td>
                <td>
                    <form action="{{ route ('profesional.destroy',$persona->id)}}" method="POST">
                    <a href="/profesional/{{$persona->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
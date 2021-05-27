@extends('layouts.plantillabase');

@section('contenido')
<h2>Editar registro</h2>

<form action="/profesional/{{$persona->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input readonly type="number" id="numerodocumento" name="numerodocumento" class="form-control" tabindex="1" value="{{$persona->id}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Numero de documento</label>
    <input type="number" id="numerodocumento" name="numerodocumento" class="form-control" tabindex="1" value="{{$persona->NumDocumento}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="form-control" tabindex="2" value="{{$persona->Nombre}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input type="text" id="apellido" name="apellido" class="form-control" tabindex="3" value="{{$persona->Apellido}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Habilidades</label>
    <input type="text" id="habilidades" name="habilidades" class="form-control" tabindex="4" value="{{$persona->Habilidades}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Salario</label>
    <input type="number" id="salario" name="salario" class="form-control" tabindex="5"value="{{$persona->Salario}}">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">Disponible</label>
    <input type="number" id="disponible" name="disponible" class="form-control" tabindex="6" value="{{$persona->Disponible}}">
    </div>

    <a href="/profesional" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection
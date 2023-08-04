@extends('layouts.template');

@section('content')
<div class="card-body">
    <h2>EDITAR EVENTO</h2>

    <form action="/eventos/{{$evento->id}}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$evento->nombre}}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">GESTION</label>
            <input id="gestion" name="gestion" type="text" class="form-control" value="{{$evento->gestion}}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">DESCRIPCION</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$evento->descripcion}}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">CUPO</label>
            <input id="cupo" name="cupo" type="text" class="form-control" value="{{$evento->cupo}}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">CATEGORIA</label>
            <input id="categoria" name="categoria" type="text" class="form-control" value="{{$evento->categoria}}">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">DISPONIBLE</label>
            <input id="disponible" name="disponible" type="text" class="form-control" value="{{$evento->disponible}}">

        </div>
        <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
        <button type="submit"  class="btn btn-success" tabindex="8"> CHANGE</button>
    </form>
</div>
@endsection
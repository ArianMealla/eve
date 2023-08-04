@extends('layouts.template');

@section('content')
<div class="card">
    <div class="card-body">
        <h2>CREAR EVENTOS</h2>
        <form action="/eventos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">NOMBRE</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">GESTION</label>
                <input id="gestion" name="gestion" type="text" class="form-control" tabindex="2">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">DESCRIPCION</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">CUPO</label>
                <input id="cupo" name="cupo" type="text" class="form-control" tabindex="4">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">CATEGORIA</label>
                <input id="categoria" name="categoria" type="text" class="form-control" tabindex="5">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">DISPONIBLE</label>
                <input id="disponible" name="disponible" type="text" class="form-control" tabindex="6">

            </div>
            <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
            <button type="submit" class="btn btn-success" tabindex="8"> SAVE</button>
        </form>
    </div>
</div>
@endsection
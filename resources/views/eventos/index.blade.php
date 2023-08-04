@extends('layouts.template')

@section('title', 'EVENTOS')

@section('content_header')
    <h1>EVENTOS MINEDU</h1>
@stop

@section('content')
<div class="card-body">
    <a href="eventos/create" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" >CREAR</a>
    <div class="d-md-flex justify-content-md-end">
        <form action="{{route('eventos.index')}}" method="GET">
            

        </form>

    </div>
    <div class="table-responsive">
        <table class="table table-primary table-striped mt-6">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">GESTION</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">CUPO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DISPONIBILIDAD</th>
                    <th scope="col">ACCIONES</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($eventos as $evento)
                <tr>
                    <td>{{$evento->id}}</td>
                    <td>{{$evento->nombre}}</td>
                    <td>{{$evento->gestion}}</td>
                    <td>{{$evento->descripcion}}</td>
                    <td>{{$evento->cupo}}</td>
                    <td>{{$evento->categoria}}</td>
                    <td>{{$evento->disponible}}</td>
                    
                    <td>{{$evento->acciones}}
                        <form action="{{route ('eventos.destroy',$evento->id)}}" method="POST">
                            <a href="/eventos/{{$evento->id}}/edit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
            
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
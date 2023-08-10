@extends('layouts.template')

@section('title', 'EVENTOS')

@section('content_header')
    <h1>EVENTOS MINEDU</h1>
@stop

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
@stop

@section('content')
<div class="card-body">
    <a href="eventos/create" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" >CREAR</a>
    <div class="d-md-flex justify-content-md-end">
        <form action="{{route('eventos.index')}}" method="GET">
            

        </form>

    </div>
    <div class="table-responsive">
        <table id="example" class="table table-primary table-striped mt-6">
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
                            <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-warning btn-sm" href="{{ route('eventos.show',$evento->id) }}"><i ></i> {{ __('Show') }}</a>
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



@section('js')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    new DataTable('#example');
</script>
@stop
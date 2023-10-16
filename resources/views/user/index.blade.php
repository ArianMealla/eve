@extends('layouts.template')

@section('content')

    
        <h1>Lista de Usuarios</h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE USUARIO</th>
                        <th>CORREO</th>
                        <th>ROL</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaL as $l)
                        <tr>
                            <th>{{ $l->id }}</th>
                            <td>{{ $l->name }}</td>
                            <td>{{ $l->email }}</td>


                            <td>
                                @can('usuario-modificar')
                                    <a href="{{ url('users/' . $l->id . '/edit') }}" class="btn btn-warning">Modificar</a>
                                @endcan


                            </td>

                            <td>
                                @can('usuario-eliminar')
                                    <form action="{{ url('users/' . $l->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay datos...</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    

@stop

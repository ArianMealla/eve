@extends('layouts.template')

@section('content')
    

        <h1>Lista de Permisos</h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE PERMISO</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaL as $l)
                        <tr>
                            <th>{{ $l->id }}</th>
                            <td>{{ $l->name }}</td>

                            <td>
                                @can('permiso-modificar')
                                    <a href="{{ url('permission/' . $l->id . '/edit') }}" class="btn btn-warning">Modificar</a>
                                @endcan

                            </td>

                            <td>
                                @can('permiso-eliminar')
                                    <form action="{{ url('permission/' . $l->id) }}" method="POST">
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

@extends('layouts.template')

@section('template_title')
    Inscripcion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            

                           
                                <a href="{{ route('inscripcions.create') }}" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-alternate btn-lg"  data-placement="left">
                                    
                                  {{ __('Inscripcion') }}
                                </a>
                                
                                
                            
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Paterno</th>
										<th>Materno</th>
										<th>Nombres</th>
										<th>Departamento</th>
										<th>Institucion</th>
										<th>Celular</th>
										<th>Correo</th>
										<th>Genero</th>
										<th>Profesion</th>
										<th>Horarios Tentativos</th>
										<th>Lugar de Asistencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscripcions as $inscripcion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inscripcion->paterno }}</td>
											<td>{{ $inscripcion->materno }}</td>
											<td>{{ $inscripcion->nombres }}</td>
											<td>{{ $inscripcion->departamento->departamento }}</td>
											<td>{{ $inscripcion->institucion }}</td>
											<td>{{ $inscripcion->celular }}</td>
											<td>{{ $inscripcion->correo }}</td>
											<td>{{ $inscripcion->genero->genero }}</td>
											<td>{{ $inscripcion->profesion }}</td>
											<td>{{ $inscripcion->horario->horario }}</td>
											<td>{{ $inscripcion->place->place }}</td>

                                            <td>
                                                <form action="{{ route('inscripcions.destroy',$inscripcion->id) }}" method="POST">
                                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-warning btn-sm" href="{{ route('inscripcions.show',$inscripcion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ route('inscripcions.edit',$inscripcion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inscripcions->links() !!}
            </div>
        </div>
    </div>
@endsection

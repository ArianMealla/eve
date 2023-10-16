@extends('layouts.template')

@section('template_title')
    Place
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            

                             <div class="float-right">
                                <a href="{{ route('places.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Lugar de Asistencia') }}
                                </a>
                              </div>
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
                                        
										<th>Place</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($places as $place)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $place->place }}</td>

                                            <td>
                                                <form action="{{ route('places.destroy',$place->id) }}" method="POST">
                                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-warning btn-sm" href="{{ route('places.show',$place->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-dark btn-sm" href="{{ route('places.edit',$place->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $places->links() !!}
            </div>
        </div>
    </div>
@endsection

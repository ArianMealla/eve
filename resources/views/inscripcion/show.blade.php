@extends('layouts.template')

@section('template_title')
    {{ $inscripcion->name ?? "{{ __('Show') Inscripcion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inscripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscripcions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $inscripcion->paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $inscripcion->materno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $inscripcion->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Departamentos Id:</strong>
                            {{ $inscripcion->departamentos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Institucion:</strong>
                            {{ $inscripcion->institucion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $inscripcion->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $inscripcion->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Generos Id:</strong>
                            {{ $inscripcion->generos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion:</strong>
                            {{ $inscripcion->profesion }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios Id:</strong>
                            {{ $inscripcion->horarios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Places Id:</strong>
                            {{ $inscripcion->places_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

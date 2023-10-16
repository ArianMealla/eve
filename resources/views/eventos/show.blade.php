@extends('layouts.template')

@section('template_title')
    {{ $profesor->name ?? "{{ __('Mostrar') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $eventos->nombre }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Fecha de Inicio:</strong>
                            {{ $eventos->fechainicio }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Fecha de Final:</strong>
                            {{ $eventos->fechafinal }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Lugar Evento:</strong>
                            {{ $eventos->lugar->nombre2 }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $eventos->categoria->categoria }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Gestion:</strong>
                            {{ $eventos->year->año }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Cupo:</strong>
                            {{ $eventos->cupo }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Tpo Evento:</strong>
                            {{ $eventos->tipo->nombre }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $eventos->disponible }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $eventos->descripcion }}
                        </div>
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
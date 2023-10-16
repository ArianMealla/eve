@extends('layouts.template')

@section('template_title')
    {{ $tiposevento->name ?? "{{ __('Mostrar') Tiposevento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Tiposevento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiposevento.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tiposevento->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

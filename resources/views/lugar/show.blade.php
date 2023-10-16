@extends('layouts.template')

@section('template_title')
    {{ $lugar->name ?? "{{ __('Mostrar') Lugar" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Lugar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugars.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $lugar->nombre2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

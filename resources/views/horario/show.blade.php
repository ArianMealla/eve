@extends('layouts.template')

@section('template_title')
    {{ $horario->name ?? "{{ __('Show') Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $horario->horario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

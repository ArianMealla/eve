@extends('layouts.template')

@section('template_title')
    {{ $genero->name ?? "{{ __('Show') Genero" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Genero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $genero->genero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

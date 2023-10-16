@extends('layouts.template')

@section('template_title')
    {{ __('Añadir') }} Lugar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Añadir') }} Lugar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lugars.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lugar.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

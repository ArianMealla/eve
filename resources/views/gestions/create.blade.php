@extends('layouts.template')

@section('template_title')
    {{ __('Añadir') }} Gestion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Añadir') }} Gestion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('gestions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('gestions.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

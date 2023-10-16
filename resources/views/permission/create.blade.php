@extends('layouts.template')

@section('content')
    
        <div class="row">
            <h1>Administración de permisos</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('permission.store') }}" method="post" enctype="multipart/form-data"
                        style="font-size: 15px">
                        <div class="modal-body">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del permiso</label>
                                <input type="text" class="form-control" id="nombre" name="name"
                                    aria-describedby="textHelp" value="">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </form>
                </div>
            </div>

        


    @stop
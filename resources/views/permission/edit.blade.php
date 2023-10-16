@extends('layouts.template')

@section('content')
    
        <div class="row">
            <h1>Edición de Administración de permisos</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('permission.update', ['permission' => $cu]) }}" method="post"
                        enctype="multipart/form-data" style="font-size: 15px">

                        @method('PUT')
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
                                <label for="name" class="form-label">Nombre del permiso</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="textHelp" value="{{ old('name') }}">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Modificar</button>
                            </div>
                    </form>
                </div>
            </div>

        


    @stop

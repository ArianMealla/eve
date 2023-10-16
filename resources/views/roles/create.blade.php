@extends('layouts.template')

@section('content')

<div class="row">
    <h1>Administración de roles</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data" style="font-size: 15px">
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
                        <label for="name" class="form-label">Nombre del rol</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp" value="">
                    </div>

                    @foreach ($listaP as $p)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$p->name}}" id="flexCheckDefault" name="permission[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$p->name}}
                            </label>
                        </div>
                    @endforeach
                    
                    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>


@endsection 
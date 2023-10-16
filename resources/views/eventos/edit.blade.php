@extends('layouts.template');

@section('content')
<div class="card-body">
    <h2>EDITAR EVENTO</h2>

    <form action="/eventos/{{$evento->id}}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">TITULO DEL EVENTO</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$evento->nombre}}">
            @error('nombre')
                <small>
                    <strong>{{$message}}</strong>
                </small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="" class="form-label">FECHA INICIO</label>
            <input id="fechainicio" name="fechainicio" type="text" class="form-control" value="{{$evento->fechainicio}}">
            @error('fechainicio')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="" class="form-label">FECHA FINAL</label>
            <input id="fechafinal" name="fechafinal" type="text" class="form-control" value="{{$evento->fechafinal}}">
            @error('fechafinal')
                <small>
                    <strong>{{$message}}</strong>
                </small>
            @enderror
            

        </div>
        <div class="mb-3">
            <label for="" class="form-label">CATEGORIA</label>
            <select name="categorias_id" class="form-select form-select-lg mb-3" aria-label="Large select example" value="{{$evento->categorias_id}}">
                <option selected>Open this select menu</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria['id']}}">{{$categoria['categoria']}}</option>

                @endforeach
                

                
                
            </select>
            @error('categoria')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="" class="form-label">GESTION</label>
            
            <select name="gestions_id" class="form-select form-select-lg mb-3" aria-label="Large select example" value="{{$evento->gestions_id}}">
                <option selected>Open this select menu</option>
                
                @foreach ($gestions as $gestion) 
                    <option value="{{$gestion['id']}}">{{$gestion['año']}}</option>
                    
                @endforeach

                
                
                
            </select>
            @error('año')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
            @enderror

        </div>
        <div class="mb-3">
            <div class="mb-3">
            <label for="" class="form-label">TIPO DE EVENTO</label>
            
            <select name="tiposeventos_id" id="tiposevento_id" class="form-select form-select-lg mb-3" aria-label="Large select example" value="{{$evento->tiposeventos_id}}">
                <option selected>Open this select menu</option>
                @foreach ($tiposeventos as $tiposevento)
                    
                    <option value="{{$tiposevento['id']}}">{{$tiposevento['nombre']}}</option>
                @endforeach

                
                
            </select>

            @error('nombre')
                <small>
                    <strong>{{$message}}</strong>
                </small>
            @enderror
            

        </div>
        <div class="mb-3">
            <label id="lugars_id" for="" class="form-label">LUGAR EVENTO</label>
            <select id="lugars_id" name="lugars_id" class="form-select form-select-lg mb-3" aria-label="Large select example" value="{{$evento->lugars_id}}">
                <option selected>Open this select menu</option>
                @foreach ($lugars as $lugar)
                    <option value="{{$lugar['id']}}">{{$lugar['nombre2']}}</option>
                    
                @endforeach

                
            </select>
            @error('nombre2')
                <small>
                    <strong>{{$message}}</strong>
                </small>
            @enderror

        </div>
        <div class="mb-3">
            <label for="" class="form-label">CUPO</label>
            <input id="cupo" name="cupo" type="text" class="form-control" tabindex="5" value="{{$evento->cupo}}">
                @error('cupo')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror

        </div>
        <div class="row">
            <div class="form-group col-12 my-3">
                <h5><label for="" class="control-label"></label>
                    <i class=""></i>
                    INSCRIPCION ABIERTA</h5>
                <div>
                    <input type="text" class="form-control" id="disponible" name="disponible" value="{{$evento->disponible}}" required>

                    @error('disponible')
                        <small>
                            <strong>{{$message}}</strong>
                        </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DESCRIPCION</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$evento->descripcion}}">
                @error('descripcion')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror

        </div>
        
       
        
        <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
        <button type="submit"  class="btn btn-success" tabindex="8"> CHANGE</button>
    </form>
</div>
@endsection
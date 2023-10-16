@extends('layouts.template');

@section('content')
<div class="card">
    <div class="card-body">
        <h2>CREAR EVENTOS</h2>
        
       
        <form action="/eventos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">TITULO DEL EVENTO</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
                @error('nombre')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="" class="form-label">FECHA DE INICIO</label>
                <input id="fechainicio" name="fechainicio" type="date" class="form-control" tabindex="2">
                @error('fechainicio')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">FECHA FINAL</label>
                <input id="fechafinal" name="fechafinal" type="date" class="form-control" tabindex="3">
                @error('fechafinal')
                <small>
                    <strong>{{$message}}</strong>
                </small>
                @enderror

            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">CATEGORIA</label>
                <select name="categorias_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Seleccione una Categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria['id']}}">{{$categoria['categoria']}}</option>

                    @endforeach
                    
                </select>
               

            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">GESTION</label>
                
                <select name="gestions_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Seleccione una Gestion</option>
                    
                    @foreach ($gestions as $gestion) 
                        <option value="{{$gestion['id']}}">{{$gestion['año']}}</option>
                        
                    @endforeach
                    
                    
                </select>
                
                

            </div>
            
            <div class="mb-3">
                <div class="mb-3">
                <label for="" class="form-label">TIPO DE EVENTO</label>
                
                <select name="tiposeventos_id" id="tiposevento_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Seleccione un Tipo de Evento</option>
                    @foreach ($tiposeventos as $tiposevento)
                        
                        <option value="{{$tiposevento['id']}}">{{$tiposevento['nombre']}}</option>
                    @endforeach
                    
                </select>
                
                

            </div>
            
            <div class="mb-3">
                <label id="lugars_id" for="" class="form-label">LUGAR EVENTO</label>
                <select id="lugars_id" name="lugars_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option selected>Seleccione el Lugar de Evento</option>
                    @foreach ($lugars as $lugar)
                        <option value="{{$lugar['id']}}">{{$lugar['nombre2']}}</option>
                        
                    @endforeach

                    

                </select>
                
                
            </div>
            
            
            <div class="mb-3">
                <label for="" class="form-label">CUPO</label>
                <input id="cupo" name="cupo" type="text" class="form-control" tabindex="5">
                @error('cupo')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror
                

            </div>
            
            <div class="row">
                <div class="form-group col-12 my-3">
                    <h5><label for="disponible" class="control-label"></label>
                        <i class=""></i>
                        INSCRIPCION ABIERTA</h5>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="disponible" id="disponible1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                SI
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="disponible" id="disponible2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                NO
                            </label>
                        </div>
                </div>

            </div>
            <div class="mb-3">
                <label for="" class="form-label">DESCRIPCION</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="5">
                @error('descripcion')
                    <small>
                        <strong>{{$message}}</strong>
                    </small>
                @enderror

            </div>
           
            <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
            <button type="submit" class="btn btn-success" tabindex="8"> SAVE</button>
        </form>
    </div>
</div>
@endsection
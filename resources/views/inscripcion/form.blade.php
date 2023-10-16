<div class="box box-info padding-1">
    <div class="box-body">
      
        
        <div class="form-group">
            {{ Form::label('paterno') }}
            {{ Form::text('paterno', $inscripcion->paterno, ['class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''), 'placeholder' => 'Paterno']) }}
            {!! $errors->first('paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materno') }}
            {{ Form::text('materno', $inscripcion->materno, ['class' => 'form-control' . ($errors->has('materno') ? ' is-invalid' : ''), 'placeholder' => 'Materno']) }}
            {!! $errors->first('materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $inscripcion->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Departamento</label>
            <select name="departamentos_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                
                @foreach ($departamentos as $departamento)
                    <option value="{{$departamento['id']}}">{{$departamento['departamento']}}</option>

                @endforeach
                
            </select>
           

        </div>
        <div class="form-group">
            {{ Form::label('institucion') }}
            {{ Form::text('institucion', $inscripcion->institucion, ['class' => 'form-control' . ($errors->has('institucion') ? ' is-invalid' : ''), 'placeholder' => 'Institucion']) }}
            {!! $errors->first('institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $inscripcion->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">EMAIL:</label>
            <input id="correo" name="correo" type="text" class="form-control" tabindex="17">

        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Genero</label>
            <select name="generos_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione un Genero</option>
                @foreach ($generos as $genero)
                    <option value="{{$genero['id']}}">{{$genero['genero']}}</option>

                @endforeach
                
            </select>
           

        </div>
        
        <div class="form-group">
            {{ Form::label('profesion') }}
            {{ Form::text('profesion', $inscripcion->profesion, ['class' => 'form-control' . ($errors->has('profesion') ? ' is-invalid' : ''), 'placeholder' => 'Profesion']) }}
            {!! $errors->first('profesion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Horario Tentativo</label>
            <select name="horarios_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione una Horario Tentativo</option>
                @foreach ($horarios as $horario)
                    <option value="{{$horario['id']}}">{{$horario['horario']}}</option>

                @endforeach
                
            </select>
           

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lugar Asistencia</label>
            <select name="places_id" class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Seleccione un Lugar Asistencia</option>
                @foreach ($places as $place)
                    <option value="{{$place['id']}}">{{$place['place']}}</option>

                @endforeach
                
            </select>
           

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Inscribirse') }}</button>
    </div>
</div>
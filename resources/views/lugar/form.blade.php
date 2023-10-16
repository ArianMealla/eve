<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $lugar->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
        <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
    </div>
</div>
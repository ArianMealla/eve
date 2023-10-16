<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $gestions->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/eventos" class="btn btn-secondary" tabindex="7"> CANCEL</a>
        <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
    </div>
</div>
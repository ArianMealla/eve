<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('place') }}
            {{ Form::text('place', $place->place, ['class' => 'form-control' . ($errors->has('place') ? ' is-invalid' : ''), 'placeholder' => 'Place']) }}
            {!! $errors->first('place', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
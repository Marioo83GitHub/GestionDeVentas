<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estado_civil') }}
            {{ Form::text('estado_civil', $estadosCivile->estado_civil, ['class' => 'form-control' . ($errors->has('estado_civil') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil']) }}
            {!! $errors->first('estado_civil', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
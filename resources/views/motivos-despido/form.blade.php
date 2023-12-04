<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('motivo_despido') }}
            {{ Form::text('motivo_despido', $motivosDespido->motivo_despido, ['class' => 'form-control' . ($errors->has('motivo_despido') ? ' is-invalid' : ''), 'placeholder' => 'Motivo Despido']) }}
            {!! $errors->first('motivo_despido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
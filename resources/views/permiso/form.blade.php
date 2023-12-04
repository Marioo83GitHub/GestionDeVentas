<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('permiso') }}
            {{ Form::text('permiso', $permiso->permiso, ['class' => 'form-control' . ($errors->has('permiso') ? ' is-invalid' : ''), 'placeholder' => 'Permiso']) }}
            {!! $errors->first('permiso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
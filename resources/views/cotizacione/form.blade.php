<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_estado_cotizacion') }}
            {{ Form::text('id_estado_cotizacion', $cotizacione->id_estado_cotizacion, ['class' => 'form-control' . ($errors->has('id_estado_cotizacion') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado Cotizacion']) }}
            {!! $errors->first('id_estado_cotizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::text('id_empleado', $cotizacione->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $cotizacione->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('meses_vigencia') }}
            {{ Form::text('meses_vigencia', $cotizacione->meses_vigencia, ['class' => 'form-control' . ($errors->has('meses_vigencia') ? ' is-invalid' : ''), 'placeholder' => 'Meses Vigencia']) }}
            {!! $errors->first('meses_vigencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
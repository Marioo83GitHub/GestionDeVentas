<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_rol') }}
            {{ Form::text('id_rol', $usuario->id_rol, ['class' => 'form-control' . ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_usuario') }}
            {{ Form::text('nombre_usuario', $usuario->nombre_usuario, ['class' => 'form-control' . ($errors->has('nombre_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Usuario']) }}
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave_acceso') }}
            {{ Form::text('clave_acceso', $usuario->clave_acceso, ['class' => 'form-control' . ($errors->has('clave_acceso') ? ' is-invalid' : ''), 'placeholder' => 'Clave Acceso']) }}
            {!! $errors->first('clave_acceso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $usuario->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('token_recuperacion') }}
            {{ Form::text('token_recuperacion', $usuario->token_recuperacion, ['class' => 'form-control' . ($errors->has('token_recuperacion') ? ' is-invalid' : ''), 'placeholder' => 'Token Recuperacion']) }}
            {!! $errors->first('token_recuperacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
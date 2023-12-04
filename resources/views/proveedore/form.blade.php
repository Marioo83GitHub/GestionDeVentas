<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ciudad') }}
            {{ Form::text('id_ciudad', $proveedore->id_ciudad, ['class' => 'form-control' . ($errors->has('id_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Id Ciudad']) }}
            {!! $errors->first('id_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_contacto') }}
            {{ Form::text('id_contacto', $proveedore->id_contacto, ['class' => 'form-control' . ($errors->has('id_contacto') ? ' is-invalid' : ''), 'placeholder' => 'Id Contacto']) }}
            {!! $errors->first('id_contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_empresa') }}
            {{ Form::text('nombre_empresa', $proveedore->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ciudad') }}
            {{ Form::text('id_ciudad', $cliente->id_ciudad, ['class' => 'form-control' . ($errors->has('id_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Id Ciudad']) }}
            {!! $errors->first('id_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_empresa') }}
            {{ Form::text('id_empresa', $cliente->id_empresa, ['class' => 'form-control' . ($errors->has('id_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Id Empresa']) }}
            {!! $errors->first('id_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_nombre') }}
            {{ Form::text('primer_nombre', $cliente->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer_apellido') }}
            {{ Form::text('primer_apellido', $cliente->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_reg_exonerado') }}
            {{ Form::text('num_reg_exonerado', $cliente->num_reg_exonerado, ['class' => 'form-control' . ($errors->has('num_reg_exonerado') ? ' is-invalid' : ''), 'placeholder' => 'Num Reg Exonerado']) }}
            {!! $errors->first('num_reg_exonerado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_reg_sag') }}
            {{ Form::text('num_reg_sag', $cliente->num_reg_sag, ['class' => 'form-control' . ($errors->has('num_reg_sag') ? ' is-invalid' : ''), 'placeholder' => 'Num Reg Sag']) }}
            {!! $errors->first('num_reg_sag', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
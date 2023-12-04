<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::text('id_empleado', $factura->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_dato_empresa') }}
            {{ Form::text('id_dato_empresa', $factura->id_dato_empresa, ['class' => 'form-control' . ($errors->has('id_dato_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Id Dato Empresa']) }}
            {!! $errors->first('id_dato_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_metodo_pago') }}
            {{ Form::text('id_metodo_pago', $factura->id_metodo_pago, ['class' => 'form-control' . ($errors->has('id_metodo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Metodo Pago']) }}
            {!! $errors->first('id_metodo_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_forma_entrega') }}
            {{ Form::text('id_forma_entrega', $factura->id_forma_entrega, ['class' => 'form-control' . ($errors->has('id_forma_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Id Forma Entrega']) }}
            {!! $errors->first('id_forma_entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $factura->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_factura') }}
            {{ Form::text('numero_factura', $factura->numero_factura, ['class' => 'form-control' . ($errors->has('numero_factura') ? ' is-invalid' : ''), 'placeholder' => 'Numero Factura']) }}
            {!! $errors->first('numero_factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_oc_exenta') }}
            {{ Form::text('numero_oc_exenta', $factura->numero_oc_exenta, ['class' => 'form-control' . ($errors->has('numero_oc_exenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Oc Exenta']) }}
            {!! $errors->first('numero_oc_exenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serie') }}
            {{ Form::text('serie', $factura->serie, ['class' => 'form-control' . ($errors->has('serie') ? ' is-invalid' : ''), 'placeholder' => 'Serie']) }}
            {!! $errors->first('serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cambio') }}
            {{ Form::text('cambio', $factura->cambio, ['class' => 'form-control' . ($errors->has('cambio') ? ' is-invalid' : ''), 'placeholder' => 'Cambio']) }}
            {!! $errors->first('cambio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_emision') }}
            {{ Form::text('fecha_emision', $factura->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('limite_fecha_emision') }}
            {{ Form::text('limite_fecha_emision', $factura->limite_fecha_emision, ['class' => 'form-control' . ($errors->has('limite_fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Limite Fecha Emision']) }}
            {!! $errors->first('limite_fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_vencimiento') }}
            {{ Form::text('fecha_vencimiento', $factura->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subtotal_neto') }}
            {{ Form::text('subtotal_neto', $factura->subtotal_neto, ['class' => 'form-control' . ($errors->has('subtotal_neto') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal Neto']) }}
            {!! $errors->first('subtotal_neto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subtotal') }}
            {{ Form::text('subtotal', $factura->subtotal, ['class' => 'form-control' . ($errors->has('subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
            {!! $errors->first('subtotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuesto15') }}
            {{ Form::text('impuesto15', $factura->impuesto15, ['class' => 'form-control' . ($errors->has('impuesto15') ? ' is-invalid' : ''), 'placeholder' => 'Impuesto15']) }}
            {!! $errors->first('impuesto15', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('impuesto18') }}
            {{ Form::text('impuesto18', $factura->impuesto18, ['class' => 'form-control' . ($errors->has('impuesto18') ? ' is-invalid' : ''), 'placeholder' => 'Impuesto18']) }}
            {!! $errors->first('impuesto18', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('importe15') }}
            {{ Form::text('importe15', $factura->importe15, ['class' => 'form-control' . ($errors->has('importe15') ? ' is-invalid' : ''), 'placeholder' => 'Importe15']) }}
            {!! $errors->first('importe15', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('importe18') }}
            {{ Form::text('importe18', $factura->importe18, ['class' => 'form-control' . ($errors->has('importe18') ? ' is-invalid' : ''), 'placeholder' => 'Importe18']) }}
            {!! $errors->first('importe18', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuento') }}
            {{ Form::text('descuento', $factura->descuento, ['class' => 'form-control' . ($errors->has('descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $factura->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
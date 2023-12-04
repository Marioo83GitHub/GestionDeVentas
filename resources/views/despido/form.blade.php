<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_contrato') }}
            {{ Form::text('id_contrato', $despido->id_contrato, ['class' => 'form-control' . ($errors->has('id_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Id Contrato']) }}
            {!! $errors->first('id_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_motivo_despido') }}
            {{ Form::text('id_motivo_despido', $despido->id_motivo_despido, ['class' => 'form-control' . ($errors->has('id_motivo_despido') ? ' is-invalid' : ''), 'placeholder' => 'Id Motivo Despido']) }}
            {!! $errors->first('id_motivo_despido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $despido->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $despido->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
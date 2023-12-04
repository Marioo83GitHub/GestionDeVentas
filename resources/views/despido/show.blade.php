@extends('layouts.app')

@section('template_title')
    {{ $despido->name ?? "{{ __('Show') Despido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Despido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('despidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Contrato:</strong>
                            {{ $despido->id_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Id Motivo Despido:</strong>
                            {{ $despido->id_motivo_despido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $despido->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $despido->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

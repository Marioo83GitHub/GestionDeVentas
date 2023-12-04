@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Motivos Despido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Motivos Despido</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('motivos-despidos.update', $motivosDespido->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('motivos-despido.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

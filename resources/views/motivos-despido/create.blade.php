@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Motivos Despido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Motivos Despido</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('motivos-despidos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('motivos-despido.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

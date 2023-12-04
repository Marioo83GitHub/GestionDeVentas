@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Estados Civile
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Estados Civile</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('estados-civiles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estados-civile.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

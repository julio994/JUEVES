@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Cerveza
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Cerveza</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cervezas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cerveza.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Michelada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Michelada</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('micheladas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('michelada.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

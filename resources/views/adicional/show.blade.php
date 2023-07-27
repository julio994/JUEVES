@extends('layouts.app')

@section('template_title')
    {{ $adicional->name ?? "{{ __('Show') Adicional" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Adicional</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('adicionals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $adicional->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $adicional->Valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

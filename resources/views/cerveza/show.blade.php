@extends('layouts.app')

@section('template_title')
    {{ $cerveza->name ?? "{{ __('Show') Cerveza" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cerveza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cervezas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cerveza->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Compra:</strong>
                            {{ $cerveza->Valor_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Venta:</strong>
                            {{ $cerveza->Valor_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $cerveza->Cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

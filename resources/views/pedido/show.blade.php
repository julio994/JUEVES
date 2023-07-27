@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pedido->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cerveza Id:</strong>
                            {{ $pedido->cerveza_id }}
                        </div>
                        <div class="form-group">
                            <strong>Michelada Id:</strong>
                            {{ $pedido->michelada_id }}
                        </div>
                        <div class="form-group">
                            <strong>Coctel Id:</strong>
                            {{ $pedido->coctel_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $pedido->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

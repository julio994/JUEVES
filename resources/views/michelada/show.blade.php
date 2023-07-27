@extends('layouts.app')

@section('template_title')
    {{ $michelada->name ?? "{{ __('Show') Michelada" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Michelada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('micheladas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $michelada->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cerveza Id:</strong>
                            {{ $michelada->cerveza_id }}
                        </div>
                        <div class="form-group">
                            <strong>Adicional Id:</strong>
                            {{ $michelada->adicional_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $michelada->Valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

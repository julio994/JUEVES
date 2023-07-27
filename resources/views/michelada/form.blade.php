<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $michelada->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cerveza_id') }}
            {{ Form::text('cerveza_id', $michelada->cerveza_id, ['class' => 'form-control' . ($errors->has('cerveza_id') ? ' is-invalid' : ''), 'placeholder' => 'Cerveza Id']) }}
            {!! $errors->first('cerveza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adicional_id') }}
            {{ Form::text('adicional_id', $michelada->adicional_id, ['class' => 'form-control' . ($errors->has('adicional_id') ? ' is-invalid' : ''), 'placeholder' => 'Adicional Id']) }}
            {!! $errors->first('adicional_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::text('Valor', $michelada->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
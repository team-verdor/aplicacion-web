<div class="form-group {{ $errors->has('fecha_orden') ? 'has-error' : ''}}">
    {!! Form::label('fecha_orden', 'Fecha Orden', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fecha_orden', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_orden', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('motivo') ? 'has-error' : ''}}">
    {!! Form::label('motivo', 'Motivo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('motivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('comentarios') ? 'has-error' : ''}}">
    {!! Form::label('comentarios', 'Comentarios', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('comentarios', null, ['class' => 'form-control']) !!}
        {!! $errors->first('comentarios', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('parcelas_id') ? 'has-error' : ''}}">
    {!! Form::label('parcelas_id', 'Parcelas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('parcelas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('parcelas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
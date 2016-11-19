<div class="form-group {{ $errors->has('nombre_comun') ? 'has-error' : ''}}">
    {!! Form::label('nombre_comun', 'Nombre Comun', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre_comun', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre_comun', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nombre_cientifico') ? 'has-error' : ''}}">
    {!! Form::label('nombre_cientifico', 'Nombre Cientifico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre_cientifico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre_cientifico', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tipo_plantas_id') ? 'has-error' : ''}}">
    {!! Form::label('tipo_plantas_id', 'Tipo Plantas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipo_plantas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipo_plantas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
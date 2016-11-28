<div class="form-group {{ $errors->has('superficie') ? 'has-error' : ''}}">
    {!! Form::label('superficie', 'Superficie', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('superficie', null, ['class' => 'form-control']) !!}
        {!! $errors->first('superficie', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('latitud') ? 'has-error' : ''}}">
    {!! Form::label('latitud', 'Latitud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
        {!! $errors->first('latitud', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('longitud') ? 'has-error' : ''}}">
    {!! Form::label('longitud', 'Longitud', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
        {!! $errors->first('longitud', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('figuras_geograficas_id') ? 'has-error' : ''}}">
    {!! Form::label('figuras_geograficas_id', 'Figuras Geograficas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('figuras_geograficas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('figuras_geograficas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
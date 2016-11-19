<div class="form-group {{ $errors->has('metodo_muestreo') ? 'has-error' : ''}}">
    {!! Form::label('metodo_muestreo', 'Metodo Muestreo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('metodo_muestreo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('metodo_muestreo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    {!! Form::label('color', 'Color', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('color', null, ['class' => 'form-control']) !!}
        {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('textura') ? 'has-error' : ''}}">
    {!! Form::label('textura', 'Textura', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('textura', null, ['class' => 'form-control']) !!}
        {!! $errors->first('textura', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('estructura') ? 'has-error' : ''}}">
    {!! Form::label('estructura', 'Estructura', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('estructura', null, ['class' => 'form-control']) !!}
        {!! $errors->first('estructura', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fecha_muestra') ? 'has-error' : ''}}">
    {!! Form::label('fecha_muestra', 'Fecha Muestra', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fecha_muestra', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_muestra', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('instrumento') ? 'has-error' : ''}}">
    {!! Form::label('instrumento', 'Instrumento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('instrumento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('instrumento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('profundidad') ? 'has-error' : ''}}">
    {!! Form::label('profundidad', 'Profundidad', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('profundidad', null, ['class' => 'form-control']) !!}
        {!! $errors->first('profundidad', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('submuestras') ? 'has-error' : ''}}">
    {!! Form::label('submuestras', 'Submuestras', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('submuestras', null, ['class' => 'form-control']) !!}
        {!! $errors->first('submuestras', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('hectareas_representa') ? 'has-error' : ''}}">
    {!! Form::label('hectareas_representa', 'Hectareas Representa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hectareas_representa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hectareas_representa', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ordenes_muestreos_id') ? 'has-error' : ''}}">
    {!! Form::label('ordenes_muestreos_id', 'Ordenes Muestreos Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ordenes_muestreos_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ordenes_muestreos_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
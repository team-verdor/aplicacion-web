<div class="form-group {{ $errors->has('dni') ? 'has-error' : ''}}">
    {!! Form::label('dni', 'Dni', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dni', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dni', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nombres') ? 'has-error' : ''}}">
    {!! Form::label('nombres', 'Nombres', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombres', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('apellido_pat') ? 'has-error' : ''}}">
    {!! Form::label('apellido_pat', 'Apellido Pat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apellido_pat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('apellido_pat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('apelllido_mat') ? 'has-error' : ''}}">
    {!! Form::label('apelllido_mat', 'Apelllido Mat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('apelllido_mat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('apelllido_mat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fecha_nac') ? 'has-error' : ''}}">
    {!! Form::label('fecha_nac', 'Fecha Nac', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('fecha_nac', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_nac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
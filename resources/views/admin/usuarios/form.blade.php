<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nombreusuario') ? 'has-error' : ''}}">
    {!! Form::label('nombreusuario', 'Nombreusuario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombreusuario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombreusuario', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contrasena') ? 'has-error' : ''}}">
    {!! Form::label('contrasena', 'Contrasena', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('contrasena', null, ['class' => 'form-control']) !!}
        {!! $errors->first('contrasena', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('personas_id') ? 'has-error' : ''}}">
    {!! Form::label('personas_id', 'Personas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('personas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('personas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
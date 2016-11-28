<div class="form-group {{ $errors->has('plantas_id') ? 'has-error' : ''}}">
    {!! Form::label('plantas_id', 'Plantas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('plantas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('plantas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('variables_id') ? 'has-error' : ''}}">
    {!! Form::label('variables_id', 'Variables Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('variables_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('variables_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('minimo') ? 'has-error' : ''}}">
    {!! Form::label('minimo', 'Minimo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('minimo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('minimo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('maximo') ? 'has-error' : ''}}">
    {!! Form::label('maximo', 'Maximo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('maximo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('maximo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('optimo') ? 'has-error' : ''}}">
    {!! Form::label('optimo', 'Optimo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('optimo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('optimo', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="form-group {{ $errors->has('muestras_suelo_id') ? 'has-error' : ''}}">
    {!! Form::label('muestras_suelo_id', 'Muestras Suelo Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('muestras_suelo_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('muestras_suelo_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
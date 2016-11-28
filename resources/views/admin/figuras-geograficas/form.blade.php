<div class="form-group {{ $errors->has('figura') ? 'has-error' : ''}}">
    {!! Form::label('figura', 'Figura', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('figura', null, ['class' => 'form-control']) !!}
        {!! $errors->first('figura', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
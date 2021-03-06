@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ValoresLimite {{ $valoreslimite->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/valores-limites/' . $valoreslimite->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit ValoresLimite"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/valoreslimites', $valoreslimite->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ValoresLimite',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $valoreslimite->id }}</td>
                                    </tr>
                                    <tr><th> Plantas Id </th><td> {{ $valoreslimite->plantas_id }} </td></tr><tr><th> Variables Id </th><td> {{ $valoreslimite->variables_id }} </td></tr><tr><th> Minimo </th><td> {{ $valoreslimite->minimo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
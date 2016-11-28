@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Persona {{ $persona->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/personas/' . $persona->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Persona"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/personas', $persona->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Persona',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $persona->id }}</td>
                                    </tr>
                                    <tr><th> Dni </th><td> {{ $persona->dni }} </td></tr><tr><th> Nombres </th><td> {{ $persona->nombres }} </td></tr><tr><th> Apellido Pat </th><td> {{ $persona->apellido_pat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
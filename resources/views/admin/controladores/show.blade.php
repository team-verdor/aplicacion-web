@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Controladore {{ $controladore->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/controladores/' . $controladore->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Controladore"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/controladores', $controladore->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Controladore',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $controladore->id }}</td>
                                    </tr>
                                    <tr><th> Serie </th><td> {{ $controladore->serie }} </td></tr><tr><th> Estado </th><td> {{ $controladore->estado }} </td></tr><tr><th> Fabricantes Id </th><td> {{ $controladore->fabricantes_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cultivo {{ $cultivo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/cultivos/' . $cultivo->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Cultivo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/cultivos', $cultivo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Cultivo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cultivo->id }}</td>
                                    </tr>
                                    <tr><th> Fecha Siembra </th><td> {{ $cultivo->fecha_siembra }} </td></tr><tr><th> Fecha Cosecha </th><td> {{ $cultivo->fecha_cosecha }} </td></tr><tr><th> Sectores Id </th><td> {{ $cultivo->sectores_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
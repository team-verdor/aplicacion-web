@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Instruccione {{ $instruccione->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/instrucciones/' . $instruccione->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Instruccione"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/instrucciones', $instruccione->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Instruccione',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $instruccione->id }}</td>
                                    </tr>
                                    <tr><th> Controladores Id </th><td> {{ $instruccione->controladores_id }} </td></tr><tr><th> Actuadores Id </th><td> {{ $instruccione->actuadores_id }} </td></tr><tr><th> Emision </th><td> {{ $instruccione->emision }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
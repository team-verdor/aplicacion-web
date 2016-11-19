@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Actuador {{ $actuadore->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/actuadores/' . $actuadore->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Actuadore"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/actuadores', $actuadore->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Actuadore',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $actuadore->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $actuadore->nombre }} </td></tr><tr><th> Modelo </th><td> {{ $actuadore->modelo }} </td></tr><tr><th> Fabricantes Id </th><td> {{ $actuadore->fabricantes_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
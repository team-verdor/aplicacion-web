@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/usuarios/create') }}" class="btn btn-primary btn-xs" title="Add New Usuario"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Email </th><th> Nombreusuario </th><th> Contrasena </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->email }}</td><td>{{ $item->nombreusuario }}</td><td>{{ $item->contrasena }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/usuarios/' . $item->id) }}" class="btn btn-success btn-xs" title="View Usuario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/usuarios/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/usuarios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Usuario" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Usuario',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $usuarios->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
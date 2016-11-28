@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Personas</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/personas/create') }}" class="btn btn-primary btn-xs" title="Add New Persona"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Dni </th><th> Nombres </th><th> Apellido Pat </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($personas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->dni }}</td><td>{{ $item->nombres }}</td><td>{{ $item->apellido_pat }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/personas/' . $item->id) }}" class="btn btn-success btn-xs" title="View Persona"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/personas/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Persona"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/personas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Persona" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Persona',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $personas->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
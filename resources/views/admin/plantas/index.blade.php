@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Plantas</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/plantas/create') }}" class="btn btn-primary btn-xs" title="Add New Planta"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nombre Comun </th><th> Nombre Cientifico </th><th> Tipo Plantas Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($plantas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre_comun }}</td><td>{{ $item->nombre_cientifico }}</td><td>{{ $item->tipo_plantas_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/plantas/' . $item->id) }}" class="btn btn-success btn-xs" title="View Planta"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/plantas/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Planta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/plantas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Planta" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Planta',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $plantas->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ordenesmuestreos</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/ordenes-muestreos/create') }}" class="btn btn-primary btn-xs" title="Add New OrdenesMuestreo"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Fecha Orden </th><th> Motivo </th><th> Comentarios </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ordenesmuestreos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fecha_orden }}</td><td>{{ $item->motivo }}</td><td>{{ $item->comentarios }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/ordenes-muestreos/' . $item->id) }}" class="btn btn-success btn-xs" title="View OrdenesMuestreo"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/ordenes-muestreos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit OrdenesMuestreo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/ordenes-muestreos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete OrdenesMuestreo" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete OrdenesMuestreo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $ordenesmuestreos->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
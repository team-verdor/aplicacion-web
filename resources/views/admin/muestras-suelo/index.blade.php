@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Muestrassuelo</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/muestras-suelo/create') }}" class="btn btn-primary btn-xs" title="Add New MuestrasSuelo"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Metodo Muestreo </th><th> Color </th><th> Textura </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($muestrassuelo as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->metodo_muestreo }}</td><td>{{ $item->color }}</td><td>{{ $item->textura }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/muestras-suelo/' . $item->id) }}" class="btn btn-success btn-xs" title="View MuestrasSuelo"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/muestras-suelo/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit MuestrasSuelo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/muestras-suelo', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete MuestrasSuelo" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete MuestrasSuelo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $muestrassuelo->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
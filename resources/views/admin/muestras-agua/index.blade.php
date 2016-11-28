@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Muestrasagua</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/muestras-agua/create') }}" class="btn btn-primary btn-xs" title="Add New MuestrasAgua"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Ordenes Muestreos Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($muestrasagua as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->ordenes_muestreos_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/muestras-agua/' . $item->id) }}" class="btn btn-success btn-xs" title="View MuestrasAgua"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/muestras-agua/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit MuestrasAgua"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/muestras-agua', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete MuestrasAgua" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete MuestrasAgua',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $muestrasagua->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
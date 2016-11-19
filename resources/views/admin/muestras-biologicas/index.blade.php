@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Muestrasbiologicas</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/muestras-biologicas/create') }}" class="btn btn-primary btn-xs" title="Add New MuestrasBiologica"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
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
                                @foreach($muestrasbiologicas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->ordenes_muestreos_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/muestras-biologicas/' . $item->id) }}" class="btn btn-success btn-xs" title="View MuestrasBiologica"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/muestras-biologicas/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit MuestrasBiologica"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/muestras-biologicas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete MuestrasBiologica" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete MuestrasBiologica',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $muestrasbiologicas->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
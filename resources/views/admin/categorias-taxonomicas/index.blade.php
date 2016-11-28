@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categoriastaxonomicas</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/categorias-taxonomicas/create') }}" class="btn btn-primary btn-xs" title="Add New CategoriasTaxonomica"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nombre </th><th> Categoria Padre Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categoriastaxonomicas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->categoria_padre_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/categorias-taxonomicas/' . $item->id) }}" class="btn btn-success btn-xs" title="View CategoriasTaxonomica"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/categorias-taxonomicas/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit CategoriasTaxonomica"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/categorias-taxonomicas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete CategoriasTaxonomica" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete CategoriasTaxonomica',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $categoriastaxonomicas->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
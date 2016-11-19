@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CategoriasTaxonomica {{ $categoriastaxonomica->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/categorias-taxonomicas/' . $categoriastaxonomica->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit CategoriasTaxonomica"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/categoriastaxonomicas', $categoriastaxonomica->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete CategoriasTaxonomica',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $categoriastaxonomica->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $categoriastaxonomica->nombre }} </td></tr><tr><th> Categoria Padre Id </th><td> {{ $categoriastaxonomica->categoria_padre_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
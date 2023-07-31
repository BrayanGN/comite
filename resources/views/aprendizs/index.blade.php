@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Aprendices</h2>
            </div>
            <div class="pull-right">
                @can('aprendiz-create')
                    <a class="btn btn-success" href="{{ route('aprendizs.create') }}"> Crear Nuevo Aprendiz</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Identificacion</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Fecha de Nacimiento</th>
            <th>Grupo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aprendizs as $aprendiz)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $aprendiz->apr_identificacion }}</td>
                <td>{{ $aprendiz->apr_nombres }}</td>
                <td>{{ $aprendiz->apr_apellidos }}</td>
                <td>{{ $aprendiz->apr_email }}</td>
                <td>{{ $aprendiz->apr_telefono }}</td>
                <td>{{ $aprendiz->apr_direccion }}</td>
                <td>{{ $aprendiz->apr_fechanacimiento }}</td>
                <td>{{ $aprendiz->apr_grupo_fk }}</td>
                <td>
                    <form action="{{ route('aprendizs.destroy', $aprendiz->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('aprendizs.show', $aprendiz->id) }}">Ver</a>
                        @can('aprendiz-edit')
                            <a class="btn btn-primary" href="{{ route('aprendizs.edit', $aprendiz->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('aprendiz-delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $aprendizs->links() !!}
@endsection

@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Programas</h2>
            </div>
            <div class="pull-right">
                @can('programa-create')
                    <a class="btn btn-success" href="{{ route('programas.create') }}"> Crear Nuevo Programa</a>
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
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Nivel de Formacion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($programas as $programa)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $programa->pro_codigo }}</td>
                <td>{{ $programa->pro_nombre }}</td>
                <td>{{ $programa->pro_nivelformacion }}</td>
                <td>
                    <form action="{{ route('programas.destroy', $programa->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('programas.show', $programa->id) }}">Ver</a>
                        @can('programa-edit')
                            <a class="btn btn-primary" href="{{ route('programas.edit', $programa->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('programa-delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $programas->links() !!}
@endsection

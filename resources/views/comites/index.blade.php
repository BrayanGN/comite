@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Comites</h2>
            </div>
            <div class="pull-right">
                @can('comite-create')
                    <a class="btn btn-success" href="{{ route('comites.create') }}"> Crear Nuevo Comite</a>
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
            <th>Fecha Solicitud</th>
            <th>Descripcion Solicitud</th>
            <th>Tipo Falta</th>
            <th>Carpeta Anexos</th>
            <th>Acta</th>
            <th>Estado</th>
            <th>Recomendacion</th>
            <th>Instructor Solicitante</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($comites as $comite)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $comite->com_fechasolicitud }}</td>
                <td>{{ $comite->com_descripcionsolicitud }}</td>
                <td>{{ $comite->com_tipofalta }}</td>
                <td>{{ $comite->com_carpetanexos }}</td>
                <td>{{ $comite->com_acta }}</td>
                <td>{{ $comite->com_estado }}</td>
                <td>{{ $comite->com_recomendacion }}</td>
                {{-- <td>{{ $comite->com_instructorsolicitante_fk }}</td> --}}
                <td>{{ $userName -> name }}</td>
                <td>
                    <form action="{{ route('comites.destroy', $comite->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('comites.show', $comite->id) }}">Ver</a>
                        @can('comite-edit')
                            <a class="btn btn-primary" href="{{ route('comites.edit', $comite->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('comite-delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $comites->links() !!}
@endsection

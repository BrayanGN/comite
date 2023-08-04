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
        @for ($i = 0; $i < count($userNames); $i++)
            <tr>
                @if (!Auth::user()->hasRole('Admin'))
                    @if (Auth::user()->id == $comites[$i]->com_instructorsolicitante_fk)
                        <td hidden>{{ $i++ }}</td>
                        <td>{{ $i }}</td>
                        <td hidden>{{ $i-- }}</td>
                        <td>{{ $comites[$i]->com_fechasolicitud }}</td>
                        <td>{{ $comites[$i]->com_descripcionsolicitud }}</td>
                        <td>{{ $comites[$i]->com_tipofalta }}</td>
                        <td>{{ $comites[$i]->com_carpetanexos }}</td>
                        <td>{{ $comites[$i]->com_acta }}</td>
                        <td>{{ $comites[$i]->com_estado }}</td>
                        <td>{{ $comites[$i]->com_recomendacion }}</td>
                        <td>{{ $userNames[$i] }}</td>
                        <td>
                            <form action="{{ route('comites.destroy', $comites[$i]->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('comites.show', $comites[$i]->id) }}">Ver</a>
                                @can('comite-edit')
                                    <a class="btn btn-primary" href="{{ route('comites.edit', $comites[$i]->id) }}">Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('comite-delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                @endcan
                            </form>
                        </td>
                    @endif
                @else
                    <td hidden>{{ $i++ }}</td>
                    <td>{{ $i }}</td>
                    <td hidden>{{ $i-- }}</td>
                    <td>{{ $comites[$i]->com_fechasolicitud }}</td>
                    <td>{{ $comites[$i]->com_descripcionsolicitud }}</td>
                    <td>{{ $comites[$i]->com_tipofalta }}</td>
                    <td>{{ $comites[$i]->com_carpetanexos }}</td>
                    <td>{{ $comites[$i]->com_acta }}</td>
                    <td>{{ $comites[$i]->com_estado }}</td>
                    <td>{{ $comites[$i]->com_recomendacion }}</td>
                    <td>{{ $userNames[$i] }}</td>
                    <td>
                        <form action="{{ route('comites.destroy', $comites[$i]->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('comites.show', $comites[$i]->id) }}">Ver</a>
                            @can('comite-edit')
                                <a class="btn btn-primary" href="{{ route('comites.edit', $comites[$i]->id) }}">Edit</a>
                            @endcan
                            @csrf
                            @method('DELETE')
                            @can('comite-delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            @endcan
                        </form>
                    </td>
                @endif
            </tr>
        @endfor
    </table>
    {!! $comites->links() !!}
@endsection

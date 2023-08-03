@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nuevo Comite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comites.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comites.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Solicitud:</strong>
                    <input type="date" name="com_fechasolicitud" class="form-control" placeholder="Fecha">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripcion Solicitud:</strong>
                    <input type="text" name="com_descripcionsolicitud" class="form-control" placeholder="Descripcion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo Falta:</strong>
                    <input type="text" name="com_tipofalta" class="form-control" placeholder="Tipo de Falta">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carpeta Anexos:</strong>
                    <input type="text" name="com_carpetanexos" class="form-control" placeholder="Carpeta Anexos">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Acta:</strong>
                    <input type="text" name="com_acta" class="form-control" placeholder="Acta">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="com_estado" class="form-control" placeholder="Estado">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Recomendacion:</strong>
                    <input type="text" name="com_recomendacion" class="form-control" placeholder="Recomendacion">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}
                <div class="form-group">
                    <strong hidden>Instructor Solicitante:</strong>
                    <input type="text" name="com_instructorsolicitante_fk" value="{{ Auth::user() -> id }}" hidden class="form-control hidden" placeholder="Solicitante">
                </div>
            {{-- </div> --}}

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

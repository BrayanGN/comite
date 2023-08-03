@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Comite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comites.index') }}">Volver</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Solicitud:</strong>
                {{ $comite->com_fechasolicitud }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion Solicitud:</strong>
                {{ $comite->com_descripcionsolicitud }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Falta:</strong>
                {{ $comite->com_tipofalta }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carpeta Anexos:</strong>
                {{ $comite->com_carpetanexos }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Acta:</strong>
                {{ $comite->com_acta }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $comite->com_estado }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Recomendacion:</strong>
                {{ $comite->com_recomendacion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instructor Solicitante:</strong>
                {{ $comite->com_instructorsolicitante_fk }}
            </div>
        </div>
    </div>
@endsection

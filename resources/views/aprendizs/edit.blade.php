@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Aprendiz</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('aprendizs.index') }}"> Back</a>
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
    <form action="{{ route('aprendizs.update', $aprendiz->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Identificacion:</strong>
                    <input type="text" name="apr_identificacion" value="{{$aprendiz->apr_identificacion}}" class="form-control" placeholder="Identificacion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="apr_nombres" value="{{$aprendiz->apr_nombres}}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="apr_apellidos" value="{{$aprendiz->apr_apellidos}}" class="form-control" placeholder="Apellidos">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="apr_email" value="{{$aprendiz->apr_email}}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefono:</strong>
                    <input type="text" name="apr_telefono" value="{{$aprendiz->apr_telefono}}" class="form-control" placeholder="Telefono">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="apr_direccion" value="{{$aprendiz->apr_direccion}}" class="form-control" placeholder="Direccion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Nacimiento:</strong>
                    <input type="date" name="apr_fechanacimiento" value="{{$aprendiz->apr_fechanacimiento}}" class="form-control" placeholder="Fecha Nacimiento">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grupo:</strong>
                    <input type="text" name="apr_grupo_fk" value="{{$aprendiz->apr_grupo_fk}}" class="form-control" placeholder="Grupo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

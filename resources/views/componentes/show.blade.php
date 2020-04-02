@extends('componentes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar componente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('componentes.index') }}">Atrás</a>
            </div>
        </div>
    </div>
      <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Laboratorio</th>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Características</th>
                  <th>Uso</th>
                  <th>Seguridad</th>
                  <th>Imágenes</th>
                  <th>Video</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>{{ $componente->Laboratorio }}</td>
                  <td>{{ $componente->Nombre }}
                  </td>
                  <td>{{ $componente->Marca }}</td>
                  <td>{{ $componente->Modelo }}</td>
                  <td>{{ $componente->Caracteristicas }}</td>
                  <td>{{ $componente->Uso }}</td>
                  <td>{{ $componente->Seguridad }}</td>
                  <td>{{ $componente->Imagenes }}</td>
                  <td>{{ $componente->Video}}</td>
            </tbody>

    <!--<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Laboratorio:</strong>
                {{ $componente->Laboratorio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $componente->Nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $componente->Marca }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Modelo:</strong>
                {{ $componente->Modelo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Características:</strong>
                {{ $componente->Caracteristicas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uso:</strong>
                {{ $componente->Uso }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seguridad:</strong>
                {{ $componente->Seguridad }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imágenes:</strong>
                {{ $componente->Imagenes}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Video:</strong>
                {{ $componente->Video }}
            </div>
        </div>
    </div>
@endsection
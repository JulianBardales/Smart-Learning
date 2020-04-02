@extends('componentes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo componente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('componentes.index') }}">Atrás</a>
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

   <form action="{{ route('componentes.store') }}" method="POST"> 
    	@csrf

                  <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Laboratorio:</strong>
                    <select name="Laboratorio" class="form-control" id="Laboratorio" 
                                        <select name="Laboratorio" id="Laboratorio">
                                        <option value="">- Laboratorio -</option>
                                        <option value="TI">Tecnologías de la información</option>
                                        <option value="Meca">Mecatrónica</option>
                                        <option value="Gastro">Gastronomía</option>
                                        <option value="Elect">Electrónica</option>
                                    </select> 

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Siglas:</strong>
                    <select name="Siglas" class="form-control" id="Laboratorio" 
                                        <select name="Siglas" id="Siglas">
                                        <option value="">- Siglas -</option>
                                        <option value="TI">T.I</option>
                                        <option value="Meca">Meca</option>
                                        <option value="Gastro">Gastro</option>
                                        <option value="Elect">Elect</option>
                                    </select> 
                                    
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="Nombre"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="text" name="Marca"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="text" name="Modelo"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Características:</strong>
                    <input type="text" name="Caracteristicas"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Uso:</strong>
                    <input type="text" name="Uso"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Seguridad:</strong>
                    <input type="text" name="Seguridad"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imágenes:</strong>
                    <input type="text" name="Imagenes"  class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Video:</strong>
                    <input type="text" name="Video" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
              
            </div>
        </div>

    </form>


@endsection
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=0.0">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Inicio</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
   <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #4696e5;">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block">Administrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link active" >
              <i class="nav-icon fas fa-table"></i>
              <p>
                Datos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="componentes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Componentes</p>
                </a>
            </ul>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laboratorios
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Electrónica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gastronomía</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mecatrónica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tecnologías de la información</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Componentes del laboratorio</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar nuevo componente</button>
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
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar componente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="Laboratorio">Laboratorio</label>
          <select name="Laboratorio" id="Laboratorio" class="form-control">
                                        <option value="">- Laboratorio -</option>
                                        <option value="TI">Tecnologías de la información</option>
                                        <option value="Meca">Mecatrónica</option>
                                        <option value="Gastro">Gastronomía</option>
                                        <option value="Elect">Electrónica</option>
                                    </select> 

        </div>
       <div class="form-group">
            <strong>Nombre:</strong>
            <input type="text" name="Nombre"  class="form-control" placeholder="Nombre">
        </div>
       <div class="form-group">
            <strong>Marca:</strong>
            <input type="text" name="Marca"  class="form-control" placeholder="Marca">
        </div>
        <div class="form-group">
            <strong>Modelo:</strong>
            <input type="text" name="Modelo"  class="form-control" placeholder="Modelo">
        </div>
        <div class="form-group">
          <strong>Características:</strong>
          <textarea style="text-transform:uppercase" id="Caracteristicas" class="form-control" name="Caracteristicas"></textarea>
          <!--<input type="text" id="obs" class="form-control"/>--> 
        </div>
          <?php /*?>jj<?php */?>
          <div class="form-group">
          <strong>Uso:</strong>
          <textarea style="text-transform" id="Uso" class="form-control" name="Uso"></textarea>
          <!--<input type="text" id="obs" class="form-control"/>--> 
        </div>
          <div class="form-group">
          <strong>Seguridad:</strong>
          <textarea style="text-transform:uppercase" id="Seguridad" class="form-control" name="Seguridad"></textarea>
          <!--<input type="text" id="obs" class="form-control"/>--> 
        </div>
         <div class="form-group">
            <strong>Imágenes:</strong>
            <input type="text" name="Imagenes"  class="form-control" placeholder="Imagenes">
        </div>
          <div class="form-group">
            <strong>Video:</strong>
            <input type="text" name="Video"  class="form-control" placeholder="Video">
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" >Agregar</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>
</form>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Lab</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Caracteristicas</th>
            <th>Uso</th>
            <th>Seguridad</th>
            <th width="100px">Opción</th>
        </tr>
      @foreach ($componente as $comp)
      <tr>
          <td>{{ ++$i }}</td>
            <td>{{ $comp->Laboratorio }}</td>
            <td>{{ $comp->Nombre }}</td>
            <td>{{ $comp->Marca }}</td>
            <td>{{ $comp->Modelo }}</td>
            <td>{{ $comp->Caracteristicas }}</td>
            <td>{{ $comp->Uso }}</td>
            <td>{{ $comp->Seguridad }}</td>
            <!--<td>{{ $comp->Imagenes }}</td>
           <!-- <td>{{ $comp->Video }}</td>-->
          <td>

                <form action="{{ route('componentes.destroy',$comp->id) }}" method="POST">
                    <a class="btn btn-success glyphicon glyphicon glyphicon-eye-open" href="{{ route('componentes.show',$comp->id) }}">Mostrar</a>
                    <a class="btn btn-warning glyphicon glyphicon-pencil" href="{{ route('componentes.edit',$comp->id) }}">Editar</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"
                    >Eliminar</button>
                </form>
          </td>
      </tr>
      @endforeach
    </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

 <!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="estilo/js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="estilo/js/script.js"></script> 
<!-- Fin crud jquery-->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="adminlte/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>
<script src="adminlte/js/demo.js"></script>
<script src="adminlte/js/pages/dashboard3.js"></script>
<script src="dist/js/bootstrap.min.js"></script> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>

@extends('componentes.layout')

@section('content')
 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<br>
<br>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <h2>Componentes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('componentes.create') }}">Agregar nuevo componente</a>
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
            <th>Laboratorio</th>
            <th>Siglas</th>
            <th width="280px">Acción</th>
        </tr>
        @foreach ($componente as $comp)<!--xd se me olvidó cambiar de ultimo, lo tenía como comp as compo hice un diagnostico con el $request y como no returnaba nada pues ya habia que no esta recibiendo corectamente-->
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $comp->Laboratorio }}</td>
            <td>{{ $comp->Siglas }}</td>
            <td>
                <form action="{{ route('componentes.destroy',$comp->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('componentes.show',$comp->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('componentes.edit',$comp->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection





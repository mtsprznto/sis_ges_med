@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Listado de usuarios</h1>

</div>
<hr>
<div class="row">
    <div class="col-md-10">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Usuarios registrados</h3>

                <div class="card-tools">
                    <a href="{{url('admin/usuarios/create')}}" class="btn btn-primary">
                        Registrar nuevo
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <table class="table table-striped table-borderless table-hover table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col" class="text-dark font-weight-normal" style="text-align: center;">Nro</th>
                            <th scope="col" class="text-dark font-weight-normal">Nombre</th>
                            <th scope="col" class="text-dark font-weight-normal">Email</th>
                            <th scope="col" class="text-dark font-weight-normal">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <th scope="row" style="text-align: center;">{{$contador++}}</th>
                            <td>{{$usuario -> name}}</td>
                            <td>{{$usuario -> email}}</td>
                            <td>
                                ver / editar / borrar
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos Secretario/a</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <p>{{$secretaria->nombres}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <p>{{$secretaria->nombres}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">CI</label>
                            <p>{{$secretaria->ci}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Celular</label>
                            <p>{{$secretaria->celular}}</p>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Fecha de nacimiento</label>
                            <p>{{$secretaria->fecha_nacimiento}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <p>{{$secretaria->direccion}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Email</label>
                            <p>{{$secretaria->user->email}}</p>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
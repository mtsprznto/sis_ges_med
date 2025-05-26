@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$consultorio->nombres}} {{$consultorio->apellidos}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos consultorio</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nombre</label> <b>*</b>
                            <p>{{$consultorio->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Ubicación</label> <b>*</b>
                            <p>{{$consultorio->ubicacion}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Capacidad</label> <b>*</b>
                            <p>{{$consultorio->capacidad}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Telefono</label> <b>*</b>
                            <p>{{$consultorio->telefono}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Especialidad</label> <b>*</b>
                            <p>{{$consultorio->especialidad}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <p>
                                @if ($consultorio->estado == "ACTIVO")
                                ACTIVO
                                @else
                                INACTIVO
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
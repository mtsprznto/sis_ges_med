@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$consultorio->nombre}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estas seguro de eliminar este registro?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label> <b>*</b>
                                <p>{{$consultorio->nombre}}</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ubicacion</label> <b>*</b>
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
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Actualización consultorio: {{$consultorio->nombre}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Edicion de consultorio</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label> <b>*</b>
                                <input type="text" name="nombre" value="{{ $consultorio->nombre}}" class="form-control" required>
                                @error('nombre')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ubicación</label> <b>*</b>
                                <input type="text" name="ubicacion" value="{{ $consultorio->ubicacion}}" class="form-control" required>
                                @error('ubicacion')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Capacidad</label> <b>*</b>
                                <input type="text" name="capacidad" value="{{ $consultorio->capacidad}}" class="form-control" required>
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" name="telefono" value="{{ $consultorio->telefono}}" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" class="form-control" value="{{ $consultorio->especialidad}}" name="especialidad" required>
                                @error('especialidad')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select name="estado" id="" class="form-control">
                                    @if ($consultorio->estado == 'ACTIVO')
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                    @else
                                    <option value="INACTIVO">INACTIVO</option>
                                    <option value="ACTIVO">ACTIVO</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
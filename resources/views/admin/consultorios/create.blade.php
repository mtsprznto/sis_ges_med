@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Registrar consultorio</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Nuevo consultorio</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/consultorios/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre del consultorio</label> <b>*</b>
                                <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" required ">
                                @error('nombre')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ubicación</label> <b>*</b>
                                <input type="text" name="ubicacion" value="{{old('ubicacion')}}" class="form-control" required ">
                                @error('ubicacion')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Capacidad</label> <b>*</b>
                                <input type="text" name="capacidad" value="{{old('capacidad')}}" class="form-control" required ">
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label> 
                                <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" class="form-control" value="{{old('especialidad')}}" name="especialidad" required>
                                @error('especialidad')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select name="estado" id="" class="form-control">
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/consultorios') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
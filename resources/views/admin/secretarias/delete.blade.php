@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Secretaria: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estas seguro de eliminar este registro?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/secretarias',$secretaria->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="name" value="{{$secretaria->user->name}}" class="form-control" disabled>
                                @error('name')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value="{{$secretaria->apellidos}}" class="form-control" disabled>
                                @error('apellidos')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label> <b>*</b>
                                <input type="text" name="celular" value="{{$secretaria->celular}}" class="form-control" disabled>
                                @error('celular')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CI</label> <b>*</b>
                                <input type="text" name="ci" value="{{$secretaria->ci}}" class="form-control" disabled>
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label> <b>*</b>
                                <input type="date" name="fecha_nacimiento" value="{{$secretaria->fecha_nacimiento}}" class="form-control" disabled>
                                @error('fecha_nacimiento')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Dirección</label> <b>*</b>
                                <input type="address" name="direccion" value="{{$secretaria->direccion}}" class="form-control" disabled>
                                @error('direccion')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label> <b>*</b>
                                <input type="email" class="form-control" name="email" value="{{$secretaria->user->email}}" disabled>
                                @error('email')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Cancelar</a>
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
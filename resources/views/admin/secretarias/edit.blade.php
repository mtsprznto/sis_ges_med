@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Editar Secretaria/o: {{$secretaria->nombres}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Editar secretaria/o</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/secretarias',$secretaria->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label> <b style="color: red !important;">*</b>
                                <input type="text" name="nombres" value="{{$secretaria->nombres}}" class="form-control" required ">
                                @error('nombres')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label> <b style="color: red !important;">*</b>
                                <input type="text" name="apellidos" value="{{$secretaria->apellidos}}" class="form-control" required ">
                                @error('apellidos')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CI</label> <b style="color: red !important;">*</b>
                                <input type="text" name="celular" value="{{$secretaria->ci}}" class="form-control" required ">
                                @error('celular')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label> <b style="color: red !important;">*</b>
                                <input type="text" name="ci" value="{{$secretaria->celular}}" class="form-control" required ">
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label> <b style="color: red !important;">*</b>
                                <input type="date" class="form-control" value="{{$secretaria->fecha_nacimiento}}" name="fecha_nacimiento" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Direccion</label> <b style="color: red !important;">*</b>
                                <input type="text" class="form-control" value="{{$secretaria->direccion}}" name="direccion" required>
                                @error('direccion')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label> <b style="color: red !important;">*</b>
                                <input type="email" class="form-control" value="{{$secretaria->user->email}}" name="email" required>
                                @error('email')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Verificar Contraseña</label>
                                <input type="password" class="form-control" name="password_confirmation">
                                @error('password_confirmation')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/secretarias') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
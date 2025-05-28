@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Actualizar Dr. {{$doctor->nombres}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Editar doctores</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/doctores/'.$doctor->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres</label> <b>*</b>
                                <input type="text" name="nombres" value="{{$doctor->nombres}}" class="form-control" required>
                                @error('nombres')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value="{{$doctor->apellidos}}" class="form-control" required>
                                @error('apellidos')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label> <b>*</b>
                                <input type="text" name="telefono" value="{{$doctor->telefono}}" class="form-control" required>
                                @error('telefono')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Licencia Medica</label> <b>*</b>
                                <input type="text" name="licencia_medica" value="{{$doctor->licencia_medica}}" class="form-control" required>
                                @error('licencia_medica')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" name="especialidad" value="{{$doctor->especialidad}}" class="form-control" required>
                                @error('especialidad')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label> <b>*</b>
                                <input type="email" class="form-control" name="email" value="{{$doctor->user->email}}" required>
                                @error('email')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Contraseña</label> <b>*</b>
                                <input type="password" class="form-control" name="password" >
                                @error('password')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Verificar Contraseña</label> <b>*</b>
                                <input type="password" class="form-control" name="password_confirmation" >
                                @error('password_confirmed')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/doctores') }}" class="btn btn-secondary">Cancelar</a>
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
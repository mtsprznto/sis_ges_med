@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Registrar secretario/a</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Nuevo secretario/a</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/secretarias/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres</label> <b>*</b>
                                <input type="text" name="nombres" value="{{old('nombres')}}" class="form-control" required ">
                                @error('nombres')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value="{{old('apellidos')}}" class="form-control" required ">
                                @error('apellidos')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label> <b>*</b>
                                <input type="text" name="celular" value="{{old('celular')}}" class="form-control" required ">
                                @error('celular')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CI</label> <b>*</b>
                                <input type="text" name="ci" value="{{old('ci')}}" class="form-control" required ">
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
                                <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" class="form-control" required ">
                                @error('fecha_nacimiento')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Dirección</label> <b>*</b>
                                <input type="address" name="direccion" value="{{old('direccion')}}" class="form-control" required ">
                                @error('direccion')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label> <b>*</b>
                                <input type="email" class="form-control" name="email" required>
                                @error('email')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Contraseña</label> <b>*</b>
                                <input type="password" class="form-control" name="password" required>
                                @error('password')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Verificar Contraseña</label> <b>*</b>
                                <input type="password" class="form-control" name="password_confirmation" required>
                                @error('password_confirmation')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
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
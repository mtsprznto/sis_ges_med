@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Registrar paciente</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Nuevo paciente</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/pacientes/create')}}" method="POST">
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
                                <label for="">CI</label> <b>*</b>
                                <input type="text" name="ci" value="{{old('ci')}}" class="form-control" required ">
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nro de seguro</label> <b>*</b>
                                <input type="text" name="nro_seguri" value="{{old('nro_seguri')}}" class="form-control" required ">
                                @error('nro_seguri')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label> <b>*</b>
                                <input type="date" class="form-control" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Genero</label>
                                <select name="genero" id="" class="form-control">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label> <b>*</b>
                                <input type="number" class="form-control" value="{{old('celular')}}" name="celular" required>
                                @error('celular')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Correo</label> <b>*</b>
                                <input type="email" class="form-control" value="{{old('correo')}}" name="correo" required>
                                @error('correo')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Direccion</label> <b>*</b>
                                <input type="address" class="form-control" value="{{old('direccion')}}" name="direccion" required>
                                @error('direccion')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="">Grupo sanguineo</label>
                                    <select name="grupo_sanguineo" id="" class="form-control">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Alergias</label> <b>*</b>
                                <input type="text" class="form-control" value="{{old('alergias')}}" name="alergias" required>
                                @error('alergias')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Contacto de emergencia</label> <b>*</b>
                                <input type="number" class="form-control" value="{{old('contacto_emergencia')}}" name="contacto_emergencia" required>
                                @error('contacto_emergencia')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Observaciones</label>

                                <input type="text" class="form-control" value="{{old('observaciones')}}" name="observaciones">
                                @error('observaciones')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Cancelar</a>
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
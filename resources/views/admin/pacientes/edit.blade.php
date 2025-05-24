@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$paciente->nombres}} {{$paciente->apellidos}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Editar paciente</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombres</label> <b>*</b>
                                <input type="text" name="nombres" value="{{$paciente->nombres}}" class="form-control" required ">
                                @error('nombres')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value="{{$paciente->apellidos}}" class="form-control" required ">
                                @error('apellidos')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CI</label> <b>*</b>
                                <input type="text" name="ci" value="{{$paciente->ci}}" class="form-control" required ">
                                @error('ci')
                                <small style=" color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nro de seguro</label> <b>*</b>
                                <input type="text" name="nro_seguri" value="{{$paciente->nro_seguri}}" class="form-control" required ">
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
                                <input type="date" class="form-control" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Genero</label>
                                <select name="genero" id="" class="form-control">
                                    @if ($paciente->genero == 'M')
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMENINO</option>
                                    @else
                                    <option value="F">FEMENINO</option>
                                    <option value="M">MASCULINO</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Celular</label> <b>*</b>
                                <input type="text" class="form-control" value="{{$paciente->celular}}" name="celular" required>
                                @error('celular')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Correo</label> <b>*</b>
                                <input type="email" class="form-control" value="{{$paciente->correo}}" name="correo" required>
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
                                <input type="address" class="form-control" value="{{$paciente->direccion}}" name="direccion" required>
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
                                        <option value="A+" @selected($paciente->grupo_sanguineo == 'A+')>A+</option>
                                        <option value="A-" @selected($paciente->grupo_sanguineo == 'A-')>A-</option>
                                        <option value="B+" @selected($paciente->grupo_sanguineo == 'B+')>B+</option>
                                        <option value="B-" @selected($paciente->grupo_sanguineo == 'B-')>B-</option>
                                        <option value="O+" @selected($paciente->grupo_sanguineo == 'O+')>O+</option>
                                        <option value="O-" @selected($paciente->grupo_sanguineo == 'O-')>O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Alergias</label> <b>*</b>
                                <input type="text" class="form-control" value="{{$paciente->alergias}}" name="alergias" required>
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
                                <input type="text" class="form-control" value="{{$paciente->contacto_emergencia}}" name="contacto_emergencia" required>
                                @error('contacto_emergencia')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="">Observaciones</label>

                                <input type="text" class="form-control" value="{{$paciente->observaciones}}" name="observaciones">
                                @error('observaciones')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/pacientes') }}" class="btn btn-danger">Cancelar</a>
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
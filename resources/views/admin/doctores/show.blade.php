@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Drs. {{$doctor->nombres}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Doctor: {{$doctor->nombres}} </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nombres</label> <b>*</b>
                            <input type="text" name="nombres" value="{{$doctor->nombres}}" class="form-control" disabled>
                            @error('nombres')
                            <small style=" color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Apellidos</label> <b>*</b>
                            <input type="text" name="apellidos" value="{{$doctor->apellidos}}" class="form-control" disabled>
                            @error('apellidos')
                            <small style=" color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Telefono</label> <b>*</b>
                            <input type="text" name="telefono" value="{{$doctor->telefono}}" class="form-control" disabled>
                            @error('telefono')
                            <small style=" color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Licencia Medica</label> <b>*</b>
                            <input type="text" name="licencia_medica" value="{{$doctor->licencia_medica}}" class="form-control" disabled>
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
                            <input type="text" name="especialidad" value="{{$doctor->especialidad}}" class="form-control" disabled>
                            @error('especialidad')
                            <small style=" color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label> <b>*</b>
                            <input type="email" class="form-control" name="email" value="{{$doctor->user->email}}" disabled>
                            @error('email')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/doctores') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
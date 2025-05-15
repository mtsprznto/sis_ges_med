@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$usuario->name}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos registrados</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre</label> <b>*</b>
                            <input type="text" name="name" value="{{$usuario->name}}" class="form-control" required ">
                                @error('name')
                                <small style=" color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Correo</label> <b>*</b>
                            <input type="email" class="form-control" value="{{$usuario->email}}" name="email" required>
                            @error('email')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/usuarios') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
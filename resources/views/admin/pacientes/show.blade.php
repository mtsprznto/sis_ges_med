@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>{{$paciente->nombres}} {{$paciente->apellidos}}</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos paciente</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nombres</label> <b>*</b>
                            <p>{{$paciente->nombres}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Apellidos</label> <b>*</b>
                            <p>{{$paciente->apellidos}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">CI</label> <b>*</b>
                            <p>{{$paciente->ci}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nro de seguro</label> <b>*</b>
                            <p>{{$paciente->nro_seguri}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Fecha de nacimiento</label> <b>*</b>
                            <p>{{$paciente->fecha_nacimiento}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Genero</label>
                            <p>
                                @if ($paciente->genero == "M")
                                MASCULINO
                                @else
                                FEMENINO
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Celular</label> <b>*</b>
                            <p>{{$paciente->celular}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Correo</label> <b>*</b>
                            <p>{{$paciente->correo}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Direccion</label> <b>*</b>
                            <p>{{$paciente->direccion}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Grupo sanguineo</label>
                                <p>{{$paciente->grupo_sanguineo}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Alergias</label> <b>*</b>
                            <p>{{$paciente->alergias}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Contacto de emergencia</label> <b>*</b>
                            <p>{{$paciente->contacto_emergencia}}</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="">Observaciones</label>

                            <p>{{$paciente->observaciones}}</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/pacientes') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
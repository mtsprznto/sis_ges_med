@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Datos del horario</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos registrados</h3>
            </div>
            <div class="card-body">
                

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Doctor</label> <b>*</b>
                                <p>{{$horario->doctor->nombres." ".$horario->doctor->apellidos." ".$horario->doctor->especialidad}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Consultorio</label> <b>*</b>
                                <p>{{$horario->consultorio->nombre." - ".$horario->consultorio->ubicacion}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Dia</label> <b>*</b>
                                <p>{{$horario->dia}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hora Incio</label> <b>*</b>
                                <p>{{$horario->hora_inicio}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hora Final</label> <b>*</b>
                                <p>{{$horario->hora_fin}}</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Volver</a>
                                
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    
</div>
</div>

@endsection
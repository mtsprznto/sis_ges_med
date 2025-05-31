@extends('layouts.admin')


@section('content')
<div class="row">
    <h1>Registrar horario</h1>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Nuevo Horario</h3>
            </div>
            <div class="card-body row">
                <div class="col-md-4">

                    <form action="{{url('/admin/horarios/create')}}" method="POST">
                        @csrf


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Doctores</label> <b>*</b>
                                    <select name="doctor_id" id="" class="form-control">
                                        @foreach ($doctores as $doctor )
                                        <option value="{{$doctor->id}}">{{$doctor->nombres. " ".$doctor->apellidos." - ".$doctor->especialidad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Consultorios</label> <b>*</b>
                                    <select name="consultorio_id" id="" class="form-control">
                                        @foreach ($consultorios as $consultorio )
                                        <option value="{{$consultorio->id}}">{{$consultorio->nombre." - ".$consultorio->ubicacion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Dia</label> <b>*</b>
                                    <select name="dia" id="" class="form-control">
                                        <option value="LUNES">LUNES</option>
                                        <option value="MARTES">MARTES</option>
                                        <option value="MIERCOLES">MIERCOLES</option>
                                        <option value="JUEVES">JUEVES</option>
                                        <option value="VIERNES">VIERNES</option>
                                        <option value="SABADO">SABADO</option>
                                        <option value="DOMINGO">DOMINGO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Hora Incio</label> <b>*</b>
                                    <input type="time" name="hora_inicio" value="{{old('hora_inicio')}}" class="form-control" required>
                                    @error('hora_inicio')
                                    <small style=" color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Hora Final</label> <b>*</b>
                                    <input type="time" name="hora_fin" value="{{old('hora_fin')}}" class="form-control" required>
                                    @error('hora_fin')
                                    <small style=" color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <table style="font-size: 12px;" class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mie</th>
                                <th>Jue</th>
                                <th>Vie</th>
                                <th>Sab</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $horas = [
                            '08:00:00 - 09:00:00',
                            '09:00:00 - 10:00:00',
                            '10:00:00 - 11:00:00',
                            '11:00:00 - 12:00:00',
                            '12:00:00 - 13:00:00',
                            '13:00:00 - 14:00:00',
                            '14:00:00 - 15:00:00',
                            '15:00:00 - 16:00:00',
                            '16:00:00 - 17:00:00',
                            '17:00:00 - 18:00:00',
                            '18:00:00 - 19:00:00',
                            '19:00:00 - 20:00:00'
                            ];
                            // Usamos 7 días y según tu tabla, omito DOMINGO. Si deseas incluirlo, agrégalo al array.
                            $diasSemana = [
                            'LUNES',
                            'MARTES',
                            'MIERCOLES',
                            'JUEVES',
                            'VIERNES',
                            'SABADO'
                            ];
                            @endphp

                            @foreach ($horas as $hora)
                            @php
                            list($hora_inicio, $hora_fin) = explode(' - ', $hora);
                            @endphp
                            <tr>
                                <td>{{ $hora }}</td>
                                @foreach ($diasSemana as $dia)
                                @php
                                // Inicializamos un arreglo para acumular los nombres de doctores
                                $nombres_doctores = [];
                                foreach($horarios as $horario) {
                                if (
                                strtoupper($horario->dia) == $dia &&
                                $hora_inicio >= $horario->hora_inicio &&
                                $hora_fin <= $horario->hora_fin
                                    ) {
                                    // Acumula el nombre del doctor, si está disponible
                                    $nombres_doctores[] = $horario->doctor->nombres;
                                    }
                                    }
                                    // Evitamos nombres duplicados
                                    $nombres_doctores = array_unique($nombres_doctores);
                                    // Concatenamos todos los nombres usando "/" como separador
                                    $nombre_doctor = count($nombres_doctores) ? implode(' / ', $nombres_doctores) : '';
                                    @endphp
                                    <td>{{ $nombre_doctor }}</td>
                                    @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
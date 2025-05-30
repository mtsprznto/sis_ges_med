@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Listado de horarios</h1>

</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Horarios registrados</h3>

                <div class="card-tools">
                    <a href="{{url('admin/horarios/create')}}" class="btn btn-primary">
                        Registrar nuevo
                    </a>
                </div>
            </div>
            <div class="card-body">

                <table id="example1" class="table table-striped table-borderless table-hover table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col" class="text-dark font-weight-normal" style="text-align: center;">Nro</th>
                            <th scope="col" class="text-dark font-weight-normal">Doctor</th>
                            <th scope="col" class="text-dark font-weight-normal">Especialidad</th>
                            <th scope="col" class="text-dark font-weight-normal">Consultorio</th>
                            <th scope="col" class="text-dark font-weight-normal">Dia de atención</th>
                            <th scope="col" class="text-dark font-weight-normal">Horario inicio</th>
                            <th scope="col" class="text-dark font-weight-normal">Hora fin</th>
                            <th scope="col" clasxs="text-dark font-weight-normal">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach($horarios as $horario)
                        <tr>
                            <th scope="row" style="text-align: center;">{{$contador++}}</th>
                            <td>{{$horario ->doctor->nombres." ".$horario->doctor->apellidos}}</td>
                            <td>{{$horario ->doctor->especialidad}}</td>
                            <td>{{$horario ->consultorio->nombre." ".$horario->consultorio->ubicacion}}</td>
                            <td>{{$horario -> dia}}</td>
                            <td>{{$horario -> hora_inicio}}</td>
                            <td>{{$horario -> hora_fin}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('/admin/horarios/'.$horario->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{url('/admin/horarios/'.$horario->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                    <a href="{{url('/admin/horarios/'.$horario->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "pageLength": 10,
                            "language": {
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ horarios",
                                "infoEmpty": "Mostrando 0 a 0 de 0 horarios",
                                "infoFiltered": "(Filtrado de _MAX_ total horarios)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ horarios",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscador:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "responsive": true,
                            "lengthChange": true,
                            "autoWidth": false,
                            buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    }, {
                                        extend: 'csv'
                                    }, {
                                        extend: 'excel'
                                    }, {
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }]
                                },
                                {
                                    extend: 'colvis',
                                    text: 'Visor de columnas',
                                    collectionLayout: 'fixed three-column'
                                }
                            ],
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    });
                </script>

            </div>
        </div>
    </div>
</div>

<!-- Calendario -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Calendario</h3>
            </div>
            <div class="card-body">
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
@endsection
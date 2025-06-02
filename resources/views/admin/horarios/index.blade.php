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
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Calendario</h3>
                    </div>
                    <div class="col-md-6">
                        <label for="">Consultorios</label>
                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                            <option value="">Seleccionar un consultorio</option>
                            @foreach ($consultorios as $consultorio )
                            <option value="{{$consultorio->id}}">{{$consultorio->nombre." - ".$consultorio->ubicacion}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

            </div>
            <div class="card-body">
                <script>
                    $('#consultorio_select').on('change', function() {
                        var consultorio_id = $('#consultorio_select').val();
                        //alert(consultorio_id)
                        var url = "{{route('admin.horarios.cargar_datos_consultorio',':id')}}"
                        url = url.replace(':id', consultorio_id);

                        if (consultorio_id) {
                            $.ajax({
                                url: url,
                                type: 'GET',
                                success: function(data) {
                                    $('#consultorio_info').html(data)
                                },
                                error: function() {
                                    alert("error al obtener los datos del consultorio")
                                }
                            });

                        } else {
                            $('#consultorio_info').html('');
                        }
                    });
                </script>
                <div id="consultorio_info"></div>
                <hr>

            </div>
        </div>
    </div>
</div>
@endsection
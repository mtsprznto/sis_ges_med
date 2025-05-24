@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Listado de pacientes</h1>

</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Secretarios registrados</h3>

                <div class="card-tools">
                    <a href="{{url('admin/pacientes/create')}}" class="btn btn-primary">
                        Registrar nuevo
                    </a>
                </div>
            </div>
            <div class="card-body">

                <table id="example1" class="table table-striped table-borderless table-hover table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col" class="text-dark font-weight-normal" style="text-align: center;">Nro</th>
                            <th scope="col" class="text-dark font-weight-normal">Nombres y apellidos</th>
                            <th scope="col" class="text-dark font-weight-normal">CI</th>
                            <th scope="col" class="text-dark font-weight-normal">Nro de seguro</th>
                            <th scope="col" class="text-dark font-weight-normal">Fecha de nacimiento</th>
                            <th scope="col" class="text-dark font-weight-normal">Genero</th>
                            <th scope="col" class="text-dark font-weight-normal">Email</th>
                            <th scope="col" class="text-dark font-weight-normal">Direccion</th>
                            <th scope="col" class="text-dark font-weight-normal">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach($pacientes as $paciente)
                        <tr>
                            <th scope="row" style="text-align: center;">{{$contador++}}</th>
                            <td>{{$paciente -> nombres}} {{$paciente->apellidos}}</td>
                            <td>{{$paciente -> ci}}</td>
                            <td>{{$paciente -> nro_seguri}}</td>
                            <td>{{$paciente -> fecha_nacimiento}}</td>
                            <td>{{$paciente -> genero}}</td>
                            <td>{{$paciente -> celular}}</td>
                            <td>{{$paciente -> correo}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('/admin/pacientes/'.$paciente->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{url('/admin/pacientes/'.$paciente->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                    <a href="{{url('/admin/pacientes/'.$paciente->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i></a>
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
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                                "infoEmpty": "Mostrando 0 a 0 de 0 Pacientes",
                                "infoFiltered": "(Filtrado de _MAX_ total Pacientes)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Pacientes",
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
@endsection
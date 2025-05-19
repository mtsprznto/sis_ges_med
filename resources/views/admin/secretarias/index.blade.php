@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>Listado de secretarias</h1>

</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Secretarios registrados</h3>

                <div class="card-tools">
                    <a href="{{url('admin/secretarias/create')}}" class="btn btn-primary">
                        Registrar nuevo
                    </a>
                </div>
            </div>
            <div class="card-body">

                <table id="example1" class="table table-striped table-borderless table-hover table-sm">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col" class="text-dark font-weight-normal" style="text-align: center;">Nro</th>
                            <th scope="col" class="text-dark font-weight-normal">Nombres</th>
                            <th scope="col" class="text-dark font-weight-normal">Apellidos</th>
                            <th scope="col" class="text-dark font-weight-normal">CI</th>
                            <th scope="col" class="text-dark font-weight-normal">Celular</th>
                            <th scope="col" class="text-dark font-weight-normal">Direccion</th>
                            <th scope="col" class="text-dark font-weight-normal">Email</th>
                            <th scope="col" class="text-dark font-weight-normal">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach($secretarias as $secretaria)
                        <tr>
                            <th scope="row" style="text-align: center;">{{$contador++}}</th>
                            <td>{{$secretaria -> nombres}}</td>
                            <td>{{$secretaria -> apellidos}}</td>
                            <td>{{$secretaria -> ci}}</td>
                            <td>{{$secretaria -> celular}}</td>
                            <td>{{$secretaria -> direccion}}</td>
                            <td>{{$secretaria -> user->email}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('/admin/secretarias/'.$secretaria->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{url('/admin/secretarias/'.$secretaria->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                    <a href="{{url('/admin/secretarias/'.$secretaria->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i></a>
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
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Secretarias",
                                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Usuarios",
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
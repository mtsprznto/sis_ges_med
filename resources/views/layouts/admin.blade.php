<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de reservas de citas medicas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Data table -->
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/admin') }}" class="nav-link">Sistema de reserva de citas medicas</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SIS Medical</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="{{url('/admin')}}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-people-fill"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios/create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-person-circle"></i>
                                <p>
                                    Secretarias
                                    <i class="right fas fa-angle-left"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/secretarias/create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creación de secretarias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/secretarias')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar secretarias</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-person-fill-check"></i>
                                <p>
                                    Pacientes
                                    <i class="right fas fa-angle-left"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/pacientes/create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creación de pacientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/pacientes')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar pacientes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-building-fill-add"></i>
                                <p>
                                    Consultorios
                                    <i class="right fas fa-angle-left"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/consultorios/create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creación de consultorios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/consultorios')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar Consultorios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-person-lines-fill"></i>
                                <p>
                                    Doctores
                                    <i class="right fas fa-angle-left"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/doctores/create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creación de doctores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/doctores')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar doctores</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link bg-red">
                                <i class="nav-icon bi bi-door-closed"></i>
                                <p>
                                    Cerrar sesión
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <div class="container p-4">
                @yield('content')
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        @if( (($message = Session::get('mensaje')) && ($icono = Session::get('icono'))) )
        <script>
            Swal.fire({
                position: "top-end",
                icon: "{{$icono}}",
                title: "{{$message}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
        @endif


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Sis Medical
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2025 <a href="#">Sis Medical</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}} "></script>
    <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}} "></script>
    <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}} "></script>
    <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}} "></script>
    <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}} "></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}} "></script>
    <script src="{{url('plugins/jszip/jszip.min.js')}} "></script>
    <script src="{{url('plugins/pdfmake/pdfmake.min.js')}} "></script>
    <script src="{{url('plugins/pdfmake/vfs_fonts.js')}} "></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}} "></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}} "></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}} "></script>

    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>


</body>

</html>
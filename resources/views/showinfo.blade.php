<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrApp</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('tema/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('tema/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('tema/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('components.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-4">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Kendaraan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- table start -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>Rata-rata Konsumsi Bahan Bakar</th>
                                        <td>{{ $vehicle->fuel_consumption ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jarak Tempuh Terakhir</th>
                                        <td>{{ $vehicle->last_distance ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Jarak Tempuh</th>
                                        <td>{{ $vehicle->total_distance ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Pemakaian Terakhir</th>
                                        <td>{{ $vehicle->last_usage_time ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pengguna Terakhir</th>
                                        <td>{{ $vehicle->last_user ?? 'N/A' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/data-kendaraan" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('components.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('tema/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('tema/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- OverlayScrollbars -->
    <script src="{{ asset('tema/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('tema/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- ChartJS -->
    <script src="{{ asset('tema/plugins/chart.js/Chart.min.js') }}"></script>

</body>

</html>

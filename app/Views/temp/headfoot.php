<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
    <!-- <title>AdminLTE 3 | Top Navigation</title> -->
    <!-- datatable css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.4/dist/sweetalert2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- responcive -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">

</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= route_to('resource') ?>" class="navbar-brand">
                    <img src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/img/AdminLTELogo.png"
                        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Dashboard</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <?= $this->renderSection('content') ?>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <small>
                    Page rendered in {elapsed_time} seconds.
                </small>
            </div>
            <?php 
            date_default_timezone_set("Asia/Jakarta");
            ?>
            <strong> &copy; <?= date('d-m-Y') ?> </strong>
        </footer>
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.4/dist/sweetalert2.all.js"></script>
    <!-- datatables js -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <!-- responsive -->
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy', 'excel', 'pdf', 'print', 'csv'
                ]
            });
        });
    </script>
</body>
</html>
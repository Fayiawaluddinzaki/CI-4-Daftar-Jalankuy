<!DOCTYPE html>
<html style="color: rgb(184,36,36);">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jalan jalan kuy</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
</head>
<body
    style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url(&quot;assets/img/ombak.jpg&quot;);">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span
            class="text-primary site-heading-upper mb-3">Jalan jalan kuy</span><span class="site-heading-lower">Sahabat
            perjalanan anda</span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Brand</a><button
                data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/daftar"><strong>booking</strong></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="products.html">Products</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="/schedule">schedule</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="web">
        <div class="container">
            <?= $this->renderSection('web'); ?>
        </div>
    </div>

    <footer class="main-footer bg-primary">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <small>
                Page rendered in {elapsed_time} seconds.
            </small>
        </div>
        <?php 
            date_default_timezone_set("Asia/Jakarta");
            ?>
        <!-- Default to the left -->
        <strong> &copy; <?= date('d-m-Y') ?> </strong>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?= base_url(); ?>/assets/js/script.min.js"></script>
</body>
</html>
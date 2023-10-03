<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('image/saint.png'); ?>" />

    <title>LAPORIN</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('css/stemp.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<?php $session = session() ?>

<body class="gradient-bg font-poppins">
    <header>



    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg gradientblack-bg py-lg-4" id="mainNav">
        <div class="container">


            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4"><a class="nav-link text-white text-uppercase" href="/user/home">Beranda</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-white text-uppercase" href="/user/add">Buat Aduan</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-white text-uppercase" href="/user/show">Aduanku</a></li>
                
            </ul>

            <div class="gap-3 d-md-flex align-items-center">
            <div class="d-flex justify-content-end">
                <a class="btn btn-outline-light btn-lg px-3 py-2 fs-6 fw-bolder" href="/logout">Logout</a>
            </div>
            <div class="topbar-divider d-none d-sm-block"></div>
            <div class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white medium"><?php echo $session->get('username') ?></span>
                        <img class="img-profile rounded-circle profile-size" src="<?php echo base_url('assets/img/profile.jpeg'); ?>">
                    </a>
                </div>

        </div>
        </div>
    </nav>

    <h1 class="site-heading text-center text-faded d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">LAYANAN</span>
        <span class="site-heading-lower">PENGADUAN MASYARAKAT</span>
    </h1>

    <?= $this->renderSection('content'); ?>

    <footer class="footer gradientblack-bg text-white text-center py-4">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Ahlfs 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>
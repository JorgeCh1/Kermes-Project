<?php

require_once '../entidades/tbl_parroquia.php';
require_once '../datos/dt_tbl_parroquia.php';
require_once '../controladores/parroquiaController.php';
if (isset($_POST['m'])) {
    $metodo = $_POST['m'];
    if (method_exists("parroquiaController", $metodo)) {
        parroquiaController::{$metodo}();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kermes Project</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/kermesse_favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/kermesse_logo.png" alt="">
                <span class="d-none d-lg-block">Kermes Project</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile_icon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Team Quickie</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Team Quickie</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="perfil.php">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="perfil.php">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php
    include("shared/navbar.php");
    ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Agregar Parroquia</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Comunidades</li>
                    <li class="breadcrumb-item active">Agregar Parroquia</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <!-- Formulario para agregar Parroquia-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agregar datos de la Parroquia</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3 needs-validation" novalidate method="POST">

                        <div class="col-md-12">
                            <input type="hidden" value="guardar" name="txtaccion" />
                            <div class="form-floating">
                                <input type="text" class="form-control" id="validationCustom01" id="floatingName"
                                    placeholder="Your Name" name="nombre" required>
                                <label for="floatingName" id="validationCustom01">Nombre</label>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Rellena este campo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="validationCustom02" id="floatingName"
                                    placeholder="Your Name" name="direccion" required>
                                <label for="floatingName" id="validationCustom02">Direccion</label>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Rellena este campo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="validationCustom03" id="floatingName"
                                    placeholder="Your Name" name="telefono" required>
                                <label for="floatingName" id="validationCustom03">Teléfono</label>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Rellena este campo y/o ingresa un correo electrónico válido
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="validationCustom05" id="floatingPassword"
                                    placeholder="Password" name="parroco" required>
                                <label for="floatingPassword" id="validationCustom05">Parroco</label>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Rellena este campo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="url" class="form-control" id="validationCustom5" id="floatingName"
                                    placeholder="Your URL" name="sitio_web" required>
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                <label for="floatingName" id="validationCustom5">Sitio Web de la Parroquia</label>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Rellena este campo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <div class="col-sm-10">
                                    <input id="validationCustom6" class="form-control" type="file" name="logo"
                                        required />

                                    <span class="input-group-text" id="basic-addon3">Logo de La Parroquia</span>
                                    <div class="valid-feedback">

                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa tu logo
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary">Agregar Parroquia</button>
                            <input type="hidden" name="m" value="guardarParroquia">
                        </div>



                    </form><!-- End floating Labels Form -->
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include("shared/footer.php");
    ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Super Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url("assets/img/admin.png"); ?>" rel="icon">
    <link href="<?php echo base_url("assets/img/apple-touch-icon.png"); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/animate.css/animate.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/icofont/icofont.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/boxicons/css/boxicons.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/venobox/venobox.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/owl.carousel/assets/owl.carousel.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/aos/aos.css"); ?>" rel="stylesheet">


    <!-- Vendor JS Files -->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/jquery.easing/jquery.easing.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/venobox/venobox.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/waypoints/jquery.waypoints.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/counterup/counterup.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/owl.carousel/owl.carousel.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/aos/aos.js"); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>


    <!-- fontawasom link -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <!-- fontawasom link -->
    <!-- Template Main CSS File -->
    <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
.thisbgcolor {
    background-color: #68829E;
    color: white;
}
</style>

<body>

    <div class="sticky-top">

        <nav class="navbar navbar-expand-lg  thisbgcolor ">
            <a class="navbar-brand" href="#" style="color:white">SuperAdmin</a>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-2 position-fixed">
            <nav class="d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class=" nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Orders
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="add_products">
                                Add Products
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 py-4">
            <h2>up load products</h2>
            <div class="col-md-11 border bg-secondry">
                <form action="product_upload_post" id="form" enctype="multipart/form-data" class="px-4 py-4"
                    method="POST">
                    <div class="form-group">
                        <label for="title">Product Title</label>
                        <input type="text" class="form-control" id="title" name="TITLE">
                    </div>
                    <div class="form-group">
                        <label for="desc">Product Description</label>
                        <input class="form-control" id="desc" name="DESCRIPTION">
                    </div>
                    <div class=" form-control-file">
                        <label for="file">uolpad file</label>
                        <input type="file" name="picture" id-="file">
                    </div>
                    <div class="col-md-12 bg-light text-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
<div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>

</html>

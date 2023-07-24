<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favic" />
    <title>Layanan Surat Desa Apar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="assets/css/font-icon.css" crossorigin="anonymous">
    <!-- Nucleo Icons -->
    <link rel="stylesheet" href="assets/css/nucleo-icons.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nucleo-svg.css" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <script src="assets/js/fa-icon.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" crossorigin="anonymous">
    <!--Boostrap Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Material Icons -->
    <link rel="stylesheet" href="assets/css/material-icons.css" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/material-dashboard.css" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/nucleo-icons.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/nucleo-svg.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/material-icons.css" crossorigin="anonymous">

    @yield('extrahead')
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white shadow-sm mb-1 bg-body rounded">
        <div class="container-fluid py-1 px-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active font-sans-serif" aria-current="page"
                            href="{{ route('user.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-sans-serif" aria-current="page"
                            href="{{ route('userlte.contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-sans-serif" aria-current="page" href="#">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
    <script src="assets/js/chartjs.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>-->
    <!-- Github buttons -->
    <script async defer src="assets/js/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-dashboard.min.js"></script>
</body>
@yield('extrascript')

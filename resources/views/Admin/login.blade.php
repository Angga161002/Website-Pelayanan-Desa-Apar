<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="../assets/css/gfont.css">
    <!--========== BOX ICONS ==========-->
    <link href="../assets/css/boxicons.min.css"rel='stylesheet'>

    <!--Boostrap Css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="icon" href="kota-pariaman.png" />
    <title>Login - Admin Pemerintah Desa Apar</title>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-1 bg-body rounded">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('user.index') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('userlte.contact') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-lg mt-5">
        <div class="col-md-3 mx-md-auto">
            <div class=" p-5 mt-5 ">
                <div class=" d-flex justify-content-center mb-3 align-items-center">
                    <img src="kota-pariaman.png" alt="" width="170" height="140">
                </div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nim">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            id="username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-3 md-3 mx-md-auto">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--========== SCROLL REVEAL ==========-->
    <script src="../assets/js/scrollreveal.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="../assets/js/main.js"></script>
</body>

</html>

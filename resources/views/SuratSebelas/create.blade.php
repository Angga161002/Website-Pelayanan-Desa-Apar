<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../kota-pariaman.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of
            downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/css/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="../assets/css/gfont.css">
    <!--Boostrap Css-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/_forms.scss" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/_reboot.scss" crossorigin="anonymous">
    <style>
        label {
            margin: 10px 0px 10px 0px;
        }
    </style>
    <title>Layanan Surat Desa Apar</title>
</head>

<body class="bg-light text-dark">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-1 bg-body rounded">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left: 25px">
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
    <div class="container pt-4 ">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16" role="img"
                        aria-label="Warning:" style="margin-right: 10px">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <div class="mr-2">
                        Harap Isi Formulir Dengan Data Yang Benar !!!
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16"
                            role="img" aria-label="Warning:">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div class="mr-2">
                            <ul>
                                @foreach ($errors->all() as $msg)
                                    <li>{{ $msg }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <h3>Surat Keterangan Bersih Diri</h3>
                <hr>
                <form action="{{ route('SuratSebelas.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                name="nik" placeholder="Nik Anda" value="{{ old('nik') }}">
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                                value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Alamat Lengkap">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="pendidian">Pendidikan</label>
                            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror"
                                id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir"
                                value="{{ old('pendidikan') }}">
                            @error('pendidikan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="warga negara">Warga Negara</label>
                            <input type="text" class="form-control @error('warga_negara') is-invalid @enderror"
                                id="warga_negara" name="warga_negara" placeholder="WNI/WNA"
                                value="{{ old('warga_negara') }}">
                            @error('warga_negara')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror"
                                id="agama" name="agama" placeholder="Agama" value="{{ old('agama') }}">
                            @error('agama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_ayah">Status Ayah</label>
                        <select class="form-select" name="status_ayah" id="status_ayah">
                            <option disabled selected>-- Status Ayah --</option>
                            <option value="MASIH_HIDUP" {{ old('status_ayah') == 'MASIH_HIDUP' ? 'selected' : '' }}>
                                Masih Hidup
                            </option>
                            <option value="MENINGGAL/LUAR_DESA"
                                {{ old('status_ayah') == 'MENINGGAL/LUAR_DESA' ? 'selected' : '' }}>
                                Meninggal/Luar Desa
                            </option>
                        </select>
                        @error('status_ayah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="detail_ayah" style="display:none;">
                        <div>
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror"
                                id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah"
                                value="{{ old('nama_ayah') }}">
                            @error('nama_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="nik_ayah">Nik Ayah</label>
                            <input type="text" class="form-control @error('nik_ayah') is-invalid @enderror"
                                id="nik_ayah" name="nik_ayah" placeholder="Nik Ayah"
                                value="{{ old('nik_ayah') }}">
                            @error('nik_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div id="detail_ayah_2" style="display:none;">
                        <div>
                            <label for="tempat_lahir_ayah">Tempat Lahir Ayah</label>
                            <input type="text"
                                class="form-control @error('tempat_lahir_ayah') is-invalid @enderror"
                                id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah"
                                value="{{ old('tempat_lahir_ayah') }}">
                            @error('tempat_lahir_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah</label>
                            <input type="text"
                                class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror"
                                id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah"
                                value="{{ old('tanggal_lahir_ayah') }}">
                            @error('tanggal_lahir_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agama_ayah">Agama</label>
                            <select class="form-select" name="agama_ayah" id="agama_ayah">
                                <option disabled selected>-- Agama --</option>
                                <option value="ISLAM" {{ old('agama_ayah') == 'ISLAM' ? 'selected' : '' }}>
                                    ISLAM
                                </option>
                                <option value="KRISTEN" {{ old('agama_ayah') == 'KRISTEN' ? 'selected' : '' }}>
                                    KRISTEN
                                </option>
                                <option value="KATHOLIK" {{ old('agama_ayah') == 'KATHOLIK' ? 'selected' : '' }}>
                                    KATHOLIK
                                </option>
                                <option value="HINDU" {{ old('agama_ayah') == 'HINDU' ? 'selected' : '' }}>
                                    HINDU
                                </option>
                                <option value="BUDHA" {{ old('agama_ayah') == 'BUDHA' ? 'selected' : '' }}>
                                    BUDHA
                                </option>
                                <option value="KHONGHUCU" {{ old('agama_ayah') == 'KHONGHUCU' ? 'selected' : '' }}>
                                    KHONGHUCU
                                </option>
                                <option value="Kepercayaan_Kepada_TuhanYME/Lainnnya"
                                    {{ old('agama_ayah') == 'Kepercayaan_Kepada_TuhanYME/Lainnnya' ? 'selected' : '' }}>
                                    Kepercayaan Kepada TuhanYME/Lainnnya
                                </option>
                            </select>
                            @error('agama_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="alamat_ayah">Alamat Ayah</label>
                            <input type="text" class="form-control @error('alamat_ayah') is-invalid @enderror"
                                id="alamat_ayah" name="alamat_ayah" placeholder="Alamat Ayah"
                                value="{{ old('alamat_ayah') }}">
                            @error('alamat_ayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status_ibu">Status Ibu</label>
                        <select class="form-select" name="status_ibu" id="status_ibu">
                            <option disabled selected>-- Status Ibu --</option>
                            <option value="MASIH_HIDUP" {{ old('status_ibu') == 'MASIH_HIDUP' ? 'selected' : '' }}>
                                MASIH HIDUP
                            </option>
                            <option value="MENINGGAL/LUAR_DESA"
                                {{ old('status_ibu') == 'MENINGGAL/LUAR_DESA' ? 'selected' : '' }}>
                                MENINGGAL/LUAR DESA
                            </option>
                        </select>
                        @error('status_ibu')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="detail_ibu" style="display:none;">
                        <div>
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror"
                                id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu"
                                value="{{ old('nama_ibu') }}">
                            @error('nama_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="nik_ibu">Nik Ibu</label>
                            <input type="text" class="form-control @error('nik_ibu') is-invalid @enderror"
                                id="nik_ibu" name="nik_ibu" placeholder="Nik Ibu" value="{{ old('nik_ibu') }}">
                            @error('nik_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div id="detail_ibu_2" style="display:none;">
                        <div>
                            <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                            <input type="text"
                                class="form-control @error('tempat_lahir_ibu') is-invalid @enderror"
                                id="tempat_lahir_ibu" name="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu"
                                value="{{ old('tempat_lahir_ibu') }}">
                            @error('tempat_lahir_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                            <input type="text"
                                class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror"
                                id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu"
                                value="{{ old('tanggal_lahir_ibu') }}">
                            @error('tanggal_lahir_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agama_ibu">Agama</label>
                            <select class="form-select" name="agama_ibu" id="agama_ibu">
                                <option disabled selected>-- Agama --</option>
                                <option value="ISLAM" {{ old('agama_ibu') == 'ISLAM' ? 'selected' : '' }}>
                                    ISLAM
                                </option>
                                <option value="KRISTEN" {{ old('agama_ibu') == 'KRISTEN' ? 'selected' : '' }}>
                                    KRISTEN
                                </option>
                                <option value="KATHOLIK" {{ old('agama_ibu') == 'KATHOLIK' ? 'selected' : '' }}>
                                    KATHOLIK
                                </option>
                                <option value="HINDU" {{ old('agama_ibu') == 'HINDU' ? 'selected' : '' }}>
                                    HINDU
                                </option>
                                <option value="BUDHA" {{ old('agama_ibu') == 'BUDHA' ? 'selected' : '' }}>
                                    BUDHA
                                </option>
                                <option value="KHONGHUCU" {{ old('agama_ibu') == 'KHONGHUCU' ? 'selected' : '' }}>
                                    KHONGHUCU
                                </option>
                                <option value="Kepercayaan_Kepada_TuhanYME/Lainnnya"
                                    {{ old('agama_ibu') == 'Kepercayaan_Kepada_TuhanYME/Lainnnya' ? 'selected' : '' }}>
                                    Kepercayaan Kepada TuhanYME/Lainnnya
                                </option>
                            </select>
                            @error('agama_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="alamat_ibu">Alamat Ibu</label>
                            <input type="text" class="form-control @error('alamat_ibu') is-invalid @enderror"
                                id="alamat_ibu" name="alamat_ibu" placeholder="Alamat Ibu"
                                value="{{ old('alamat_ibu') }}">
                            @error('alamat_ibu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan" readonly>{{ old('keterangan') }}Sesuai dengan penelitian kami, orang tersebut Ayah/Wali dan Ibu/Wali di atas hingga saat ini dikeluarkannya Surat Keterangan ternyata yang bersangkutan : 
a. Berkelakuan baik/belum pernah tersangkut urusan Polisi.
b. Tidak pernah terlibat langsung/tidak langsung G 30 S/PKI atau Gerakan Ekstrim anti PANCASILA</textarea>
                    </div>
                    <div>
                        <label for="no_hp">No Hp</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                            id="no_hp" name="no_hp" placeholder="No Hp Atau Whatsapp Yang Bisa Dihubungi"
                            value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-3 mt-3"
            style="background-color: #28a745; border-color: #28a745;">Ajukan</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>-->

    <!-- jQuery 3 -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $
            .widget
            .bridge('uibutton', $.ui.button);
    </script>
    <!-- Sparkline -->
    <script src="../assets/js/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../assets/js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../assets/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../assets/js/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/js/demo.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('#status_ayah').on('change', function() {
            $('#detail_ayah').show();
            if (this.value == "MASIH_HIDUP") {
                $('#detail_ayah_2').hide();
            } else {
                $('#detail_ayah_2').show();
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#status_ibu').on('change', function() {
            $('#detail_ibu').show();
            if (this.value == "MASIH_HIDUP") {
                $('#detail_ibu_2').hide();
            } else {
                $('#detail_ibu_2').show();
            }
        })
    })
</script>

</html>

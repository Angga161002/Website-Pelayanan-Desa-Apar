<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
            -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="../assets/css/gfont.css">
    <!--Boostrap Css-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="icon" href="../kota-pariaman.png" />
    <title>Layanan Surat Desa Apar</title>
</head>

<body>
    <div class="container mt-3 bg-light text-dark">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h3 class="mr-auto">Surat Dari
                        {{ $SuratEnambelas->nama }}</h3>
                    @if ($SuratEnambelas->status == 1)
                        <a href="{{ url('suratenambelas/admin/status/' . $SuratEnambelas->id) }}"
                            class="btn btn-success mr-2">Sudah Tercetak</a>
                    @else
                        <a href="{{ url('suratenambelas/admin/status/' . $SuratEnambelas->id) }}""
                            class="btn btn-danger mr-2">Belum Tercetak</a>
                    @endif
                    <form action="{{ route('SuratEnambelas.destroy', ['SuratEnambelas' => $SuratEnambelas->id]) }}"
                        method="POST">
                        @method('DELETE') @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="{{ route('SuratEnambelas.index') }}" class="btn btn-secondary ml-2">Kembali
                    </a>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>Nik :
                        {{ $SuratEnambelas->nik }}
                    </li>
                    <li>Tempat Lahir :
                        {{ $SuratEnambelas->tempat_lahir }}
                    </li>
                    <li>Tanggal Lahir :
                        {{ $SuratEnambelas->tanggal_lahir }}
                    </li>
                    <li>Alamat :
                        {{ $SuratEnambelas->alamat }}
                    </li>
                    <li>Pendidikan :
                        {{ $SuratEnambelas->pendidikan }}
                    </li>
                    <li>Warga Negara :
                        {{ $SuratEnambelas->warga_negara }}
                    </li>
                    <li>Agama :
                        {{ $SuratEnambelas->agama }}
                    </li>
                    <li>Nama Orang Tua/Wali :
                        {{ $SuratEnambelas->nama_ortu }}
                    </li>
                    <li>Nik Orang Tua/Wali :
                        {{ $SuratEnambelas->nik_ortu }}
                    </li>
                    <li>Nama Saksi I :
                        {{ $SuratEnambelas->nama_saksisatu }}
                    </li>
                    <li>Nik Saksi I :
                        {{ $SuratEnambelas->nik_saksisatu }}
                    </li>
                    <li>Nama Saksi II :
                        {{ $SuratEnambelas->nama_saksidua }}
                    </li>
                    <li>Nik Saksi II :
                        {{ $SuratEnambelas->nik_saksidua }}
                    </li>
                    <li>Pernyataan :
                        {{ $SuratEnambelas->pernyataan }}
                    </li>
                    <li>No HP :
                        {{ $SuratEnambelas->no_hp }}
                    </li>
                </ul>
            </div>
        </div>
    </div>










</body>

</html>

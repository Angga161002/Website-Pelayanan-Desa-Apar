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
                        {{ $SuratDelapanbelas->nama }}</h3>
                    @if ($SuratDelapanbelas->status == 1)
                        <a href="{{ url('suratdelapanbelas/admin/status/' . $SuratDelapanbelas->id) }}"
                            class="btn btn-success mr-2">Sudah Tercetak</a>
                    @else
                        <a href="{{ url('suratdelapanbelas/admin/status/' . $SuratDelapanbelas->id) }}""
                            class="btn btn-danger mr-2">Belum Tercetak</a>
                    @endif
                    <form
                        action="{{ route('SuratDelapanbelas.destroy', ['SuratDelapanbelas' => $SuratDelapanbelas->id]) }}"
                        method="POST">
                        @method('DELETE') @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="{{ route('SuratDelapanbelas.index') }}" class="btn btn-secondary ml-2">Kembali
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
                        {{ $SuratDelapanbelas->nik }}
                    </li>
                    <li>Tempat Lahir :
                        {{ $SuratDelapanbelas->tempat_lahir }}
                    </li>
                    <li>Tanggal Lahir :
                        {{ $SuratDelapanbelas->tanggal_lahir }}
                    </li>
                    <li>Alamat :
                        {{ $SuratDelapanbelas->alamat }}
                    </li>
                    <li>Pendidikan :
                        {{ $SuratDelapanbelas->pendidikan }}
                    </li>
                    <li>Warga Negara :
                        {{ $SuratDelapanbelas->warga_negara }}
                    </li>
                    <li>Agama :
                        {{ $SuratDelapanbelas->agama }}
                    </li>

                    <li>Keterangan :
                        {{ $SuratDelapanbelas->keterangan }}
                    </li>
                    <li>No HP :
                        {{ $SuratDelapanbelas->no_hp }}
                    </li>
                </ul>
            </div>
        </div>
    </div>










</body>

</html>

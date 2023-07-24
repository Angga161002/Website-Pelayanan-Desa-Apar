<?php

namespace App\Http\Controllers;

use App\Models\AdminLTE;
use App\Models\SuratSatu;
use App\Models\SuratDua;
use App\Models\SuratEmpat;
use App\Models\SuratLima;
use App\Models\SuratEnam;
use App\Models\SuratTujuh;
use App\Models\SuratDelapan;
use App\Models\SuratSembilan;
use App\Models\SuratSepuluh;
use App\Models\SuratSebelas;
use App\Models\SuratDuabelas;
use App\Models\SuratTigabelas;
use App\Models\SuratEmpatbelas;
use App\Models\SuratLimabelas;
use App\Models\SuratEnambelas;
use App\Models\SuratTujuhbelas;
use App\Models\SuratDelapanbelas;

use Illuminate\Http\Request;

class AdminLTEController extends Controller
{
    public function index()
    {

    $data['module']['name'] = "Beranda";
    return view('adminLTE.index',['data' => $data,
    'jumlah_suratsatu' => SuratSatu:: count(),
    'jumlah_suratdua' => SuratDua:: count(),
    'jumlah_suratempat' => SuratEmpat:: count(),
    'jumlah_suratlima' => SuratLima:: count(),
    'jumlah_suratenam' => SuratEnam:: count(),
    'jumlah_surattujuh' => SuratTujuh:: count(),
    'jumlah_suratdelapan' => SuratDelapan:: count(),
    'jumlah_suratsembilan' => SuratSembilan:: count(),
    'jumlah_suratsepuluh' => SuratSepuluh:: count(),
    'jumlah_suratsebelas' => SuratSebelas:: count(),
    'jumlah_suratduabelas' => SuratDuabelas:: count(),
    'jumlah_surattigabelas' => SuratTigabelas:: count(),
    'jumlah_suratempatbelas' => SuratEmpatbelas:: count(),
    'jumlah_suratlimabelas' => SuratLimabelas:: count(),
    'jumlah_suratenambelas' => SuratEnambelas:: count(),
    'jumlah_surattujuhbelas' => SuratTujuhbelas:: count(),
    'jumlah_suratdelapanbelas' => SuratDelapanbelas:: count(),]);
    }

    
}
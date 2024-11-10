<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\Mou;
use App\Models\Nodin;
use App\Models\Sk;
use App\Models\Spj;
use App\Models\Sppd;
use App\Models\St;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  public function index(){
    //Total Surat
    $totalsuratmasuk = SuratMasuk::all()->count();
    $totalsuratkeluar = SuratKeluar::all()->count();
    $totalspj = Spj::all()->count();
    $totalnodin = Nodin::all()->count();
    $totalsk = Sk::all()->count();
    $totalmou = Mou::all()->count();
    $totalsppd = Sppd::all()->count();
    $totalst = St::all()->count();
    $totalterdisposisi = Disposisi::whereNotNull('no')->distinct('no')->count('no');
    $totalbelumdisposisi = DB::table('suratmasuks')
    ->leftJoin('disposisis', 'suratmasuks.nomor_surat', '=', 'disposisis.no')
    ->whereNull('disposisis.no')
    ->count('suratmasuks.nomor_surat');



    $suratmasuk = SuratMasuk::orderBy('id', 'desc')->take('3')->get();
    $suratkeluar = SuratKeluar::orderBy('id', 'desc')->take('3')->get();


    return view('dashboard', compact('totalsuratmasuk', 'totalsuratkeluar', 'suratmasuk', 'suratkeluar', 'totalspj', 'totalnodin', 'totalsk', 'totalmou', 'totalsppd','totalst', 'totalterdisposisi', 'totalbelumdisposisi'));
 }   
}

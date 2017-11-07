<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use View;
use Charts;
use App\User;
use Http\Requests;
use App\Models\Profile;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Requests\LaporanRequest;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function __construct(Request $request)
    {
        View::share('periode', Periode::all());
    }

    public function index()
    {
      $id=Auth::user()->id;
      $profile       = Profile::Where('user_id',$id)->get()->first();
      $periode       = Periode::select('periode')->get();
      $per_periode   = User::select(DB::raw('COUNT(id) as jml_pendaftar'))->join('profiles','profiles.user_id','=','users.id')
                        ->where('role',1)->groupBy('profiles.periode_id');
      $per_agama     = User::select('agama', DB::raw('COUNT(id) as per_agama'))->join('profiles','profiles.user_id','=','users.id')
                        ->where('role',1)->groupBy('profiles.agama');
      $jenkel        = User::select('jenis_kelamin', DB::raw('COUNT(id) as jml_perjenkel'))->join('profiles', 'profiles.user_id', '=', 'users.id')
                        ->where('role',1)->groupBy('profiles.jenis_kelamin');
      $status_bio    = User::select('status_biodata', DB::raw('COUNT(id) as jml_perStatBio'))->join('profiles', 'profiles.user_id', '=', 'users.id')
                        ->where('role',1)->groupBy('profiles.status_biodata');
      $stat_diterima = User::select('status_diterima', DB::raw('COUNT(id) as jml_StatDiterima'))->join('profiles', 'profiles.user_id', '=', 'users.id')
                        ->where('role',1)->groupBy('profiles.status_diterima');

      // Per agama
      $chartBio = Charts::create('pie', 'highcharts')
        ->title('Status Biodata')
        ->labels($status_bio->pluck('status_biodata')->toArray())
        ->values($status_bio->pluck('jml_perStatBio')->toArray())
        ->dimensions(500,400)
        ->responsive(true);

      $chartKelulusan = Charts::create('pie', 'highcharts')
        ->title('Status Biodata')
        ->labels($stat_diterima->pluck('status_diterima')->toArray())
        ->values($stat_diterima->pluck('jml_StatDiterima')->toArray())
        ->dimensions(500,400)
        ->responsive(true);

      $chart = Charts::create('pie', 'highcharts')
        ->title('Diagram Pie Pendaftar Tahun ini')
        ->labels($jenkel->pluck('jenis_kelamin')->toArray())
        ->values($jenkel->pluck('jml_perjenkel')->toArray())
        ->dimensions(500,500)
        ->responsive(true);

      // Per agama
      $chartAgama = Charts::create('pie', 'highcharts')
        ->title('Pendaftar Per-Agama Tahun ini')
        ->labels($per_agama->pluck('agama')->toArray())
        ->values($per_agama->pluck('per_agama')->toArray())
        ->dimensions(500,400)
        ->responsive(true);

      // grafik pendaftar pertahun
      $dt_pertahun = Charts::create('bar', 'highcharts')
        ->title('Jumlah Pendaftar Pertahun')
        ->labels($periode->pluck('periode')->toArray())
        ->values($per_periode->pluck('jml_pendaftar')->toArray())
        ->dimensions(400,400)
        ->responsive(true);
      return view('laporan.home', compact('chart', 'profile', 'dt_pertahun', 'chartAgama', 'chartBio', 'chartKelulusan'));
    }

    public function lap_data_pendaftar(LaporanRequest $request)
    {
      $periode = Periode::Where('id',$request->periode)->get()->first();
      $users = User::join('profiles','profiles.user_id','=','users.id')->Where('role','<>',2)->where('profiles.periode_id',$request->periode)->get();
      $pdf=PDF::loadView('laporan.pdf.data_pendaftar', compact('users', 'periode'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_data_pendaftar.pdf');
    }

    public function lap_pendaftar_pertahun(Request $request)
    {
      $users = User::select('periode.periode', DB::raw('COUNT(users.id) as jml_pendaftar'))
                   ->join('profiles','profiles.user_id','=','users.id')
                   ->join('periode','profiles.periode_id','=','periode.id')
                   ->Where('role',1)
                   ->groupBy('profiles.periode_id')
                   ->get();
      $pdf=PDF::loadView('laporan.pdf.pendaftar_pertahun', compact('users'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_pendaftar_pertahun.pdf');
    }

    public function lap_statistik(LaporanRequest $request)
    {
      $users = User::Where('role','<>',2)->get();
      $pdf=PDF::loadView('laporan.pdf.data_statistik', compact('users'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_statistik.pdf');
    }

    public function lap_data_kelulusan(LaporanRequest $request)
    {
      $periode = Periode::Where('id',$request->periode)->get()->first();
      $users = User::join('profiles','profiles.user_id','=','users.id')->Where('role',1)->where('status_diterima','Lulus')->where('profiles.periode_id',$request->periode)->get();
      $pdf=PDF::loadView('laporan.pdf.data_kelulusan', compact('users', 'periode'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_data_kelulusan.pdf');
    }
}

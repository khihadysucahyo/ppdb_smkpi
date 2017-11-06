<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use View;
use Charts;
use App\User;
use Http\Requests;
use App\Models\Profile;
use App\Models\Tahun_Ajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Requests\LaporanRequest;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function __construct(Request $request)
    {
        View::share('tahun_ajaran', Tahun_Ajaran::all());
    }

    public function index()
    {
      $id=Auth::user()->id;
      $profile = Profile::Where('user_id',$id)->get()->first();
      $ta=Tahun_Ajaran::select('tahun_ajaran')->get();
      $per_ta=User::select(DB::raw('COUNT(id) as jml_pendaftar'))->join('profiles','profiles.user_id','=','users.id')
                  ->where('role',1)->groupBy('profiles.tahun_ajaran');
      $laki=User::join('profiles','profiles.user_id','=','users.id')->where('role',1)->where('jenis_kelamin','laki-laki')->get();
      $perempuan=User::join('profiles','profiles.user_id','=','users.id')->where('role',1)->where('jenis_kelamin','perempuan')->get();


      // data jenkel periode sekarang
      $chart = Charts::create('pie', 'highcharts')
        ->title('Diagram Pie Pendaftar Tahun ini')
        ->labels(['laki-laki', 'Perempuan'])
        ->values([count($laki),count($perempuan)])
        ->dimensions(500,500)
        ->responsive(false);

      // grafik pendaftar pertahun
      $dt_pertahun = Charts::create('bar', 'highcharts')
        ->title('Diagram Batang Pendaftar Pertahun')
        ->labels($ta->pluck('tahun_ajaran'))
        ->values($per_ta->pluck('jml_pendaftar'))
        ->dimensions(500,500)
        ->responsive(false);
      return view('laporan.home', compact('chart', 'profile', 'dt_pertahun'));
    }

    public function lap_data_pendaftar(LaporanRequest $request)
    {
      $tahun_ajaran = Tahun_Ajaran::Where('id',$request->tahun_ajaran)->get()->first();
      $users = User::join('profiles','profiles.user_id','=','users.id')->Where('role','<>',2)->where('profiles.tahun_ajaran',$request->tahun_ajaran)->get();
      $pdf=PDF::loadView('laporan.pdf.data_pendaftar', compact('users', 'tahun_ajaran'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_data_pendaftar.pdf');
    }

    public function lap_pendaftar_pertahun(Request $request)
    {
      $users = User::select('tahun_ajaran.tahun_ajaran', DB::raw('COUNT(users.id) as jml_pendaftar'))
                   ->join('profiles','profiles.user_id','=','users.id')
                   ->join('tahun_ajaran','profiles.tahun_ajaran','=','tahun_ajaran.id')
                   ->Where('role',1)
                   ->groupBy('tahun_ajaran')
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
      $tahun_ajaran = Tahun_Ajaran::Where('id',$request->tahun_ajaran)->get()->first();
      $users = User::join('profiles','profiles.user_id','=','users.id')->Where('role',1)->where('status_diterima','Lulus')->where('profiles.tahun_ajaran',$request->tahun_ajaran)->get();
      $pdf=PDF::loadView('laporan.pdf.data_kelulusan', compact('users', 'tahun_ajaran'));
      $pdf->setPaper('a4', 'potrait');
      return $pdf->stream('lap_data_kelulusan.pdf');
    }
}

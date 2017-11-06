<?php

namespace App\Http\Controllers;

use View;
use App\User;
use App\Models\Info;
use App\Models\Sekolah;
use App\Models\Periode;
use App\Models\Pengaturan;
use Illuminate\Http\Request;


class PublicController extends Controller
{
  public function __construct()
  {
      $periode    = Periode::join('pengaturans','pengaturans.periode_id','=','periode.id')->get()->first();
      $pengaturan = Pengaturan::get()->first(); //its just a dummy data object.
      View::share('pengaturan', $pengaturan); // Sharing is caring
      View::share('periode', $periode); // Sharing is caring
  }

  public function index()
  {
    return view('welcome');
  }

  public function list_peserta()
  {
      $pengaturan = Pengaturan::get()->first();
      $users = User::join('profiles', 'profiles.user_id','=','users.id')->Where('role',1)->where('profiles.periode_id', $pengaturan->pluck('periode_id'))->paginate(7);
      return view('public.list_peserta', compact('users'));
  }

  public function profile()
  {
      $tentang_sekolah = Sekolah::Where('title', 'Tentang Sekolah')->get()->first();
      $visi_misi = Sekolah::Where('title', 'Visi & Misi')->get()->first();
      $lokasi = Sekolah::Where('title', 'Lokasi')->get()->first();
      return view('public.profile', compact('tentang_sekolah', 'visi_misi', 'lokasi'));
  }

  public function info_ppdb()
  {
      $info = Info::orderBy('created_at', 'desc')->paginate(14);
      return view('public.info', compact('info'));
  }
  public function info_detail($id)
  {
      $info = Info::find($id);
      return view('public.detail_info', compact('info'));
  }
}

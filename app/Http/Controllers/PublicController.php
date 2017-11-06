<?php

namespace App\Http\Controllers;

use View;
use App\User;
use App\Models\Info;
use App\Models\Sekolah;
use App\Models\Pengaturan;
use Illuminate\Http\Request;


class PublicController extends Controller
{
  public function __construct()
  {
      $pengaturan = Pengaturan::get()->first(); //its just a dummy data object.
      View::share('pengaturan', $pengaturan); // Sharing is caring
  }

  public function index()
  {
    return view('welcome');
  }

  public function list_peserta()
  {
      $users = User::Where('role','<>',2)->paginate(7);
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

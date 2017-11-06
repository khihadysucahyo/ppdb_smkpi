<?php

namespace App\Http\Controllers;

use Auth;
use MyLib;
use App\Models\Profile;
use App\Models\Sekolah;
use App\Models\Pengaturan;
use App\Models\Periode;
use Illuminate\Http\Request;
use App\Models\Telegram_Settings;
use App\Http\Requests\SekolahRequest;
use App\Http\Requests\TelegramRequest;

class SekolahController extends Controller
{

  public function tentang_sekolah()
  {
      $tentang_sekolah = Sekolah::Where('title', 'Tentang Sekolah')->get()->first();
      return view('sekolah.tentang_sekolah', compact('tentang_sekolah'), ['profile'=>MyLib::getProfile()]);
  }


  public function tentang_sekolah_store(SekolahRequest $request)
  {
      Sekolah::Where('id', 1)->update(['teks'=>$request->teks,'lampiran' => MyLib::UpdateLampiran($request)]);
      return redirect('/tentang_sekolah')->with('message','Data Berhasil disimpan!');
  }


  public function visi_misi()
  {
      $visi_misi = Sekolah::Where('title', 'Visi & Misi')->get()->first();
      return view('sekolah.visi_misi', compact('visi_misi'), ['profile'=>MyLib::getProfile()]);
  }


  public function visi_misi_store(SekolahRequest $request)
  {
      Sekolah::Where('id', 2)->update(['teks'=>$request->teks,'lampiran' => MyLib::UpdateLampiran($request)]);
      return redirect('/visi_misi')->with('message','Data Berhasil disimpan!');
  }


  public function lokasi()
  {
      $lokasi = Sekolah::Where('title', 'Lokasi')->get()->first();
      return view('sekolah.lokasi', compact('lokasi'), ['profile'=>MyLib::getProfile()]);
  }


  public function lokasi_store(SekolahRequest $request)
  {
      Sekolah::Where('id', 3)->update(['teks'=>$request->teks,'lampiran' => MyLib::UpdateLampiran($request)]);
      return redirect('/lokasi')->with('message','Data Berhasil disimpan!');
  }


  public function pengaturan()
  {
      $periode  = Periode::all();
      $telegram_settings = Telegram_Settings::get()->first();
      $pengaturan = Pengaturan::get()->first();
      return view('pengaturan.pengaturan', ['profile'=>MyLib::getProfile()], compact('periode', 'pengaturan', 'telegram_settings'));
  }

  public function pengaturan_update(Request $request)
  {
      $buka_pendaftaran=($request->buka_pendaftaran==null) ? 1 : 0;
      $tampil_kelulusan=($request->tampil_hasil_kelulusan==null) ? 1 : 0;
      Pengaturan::find(1)->update([
        'periode_id'=>$request->periode_id,
        'buka_pendaftaran'=>$buka_pendaftaran,
        'tampil_hasil_kelulusan'=>$tampil_kelulusan,
      ]);
      return redirect()->back()->with('message','Pengaturan berhasil disimpan!');
  }

  public function pengaturan_update_telegram(TelegramRequest $request)
  {
      Telegram_Settings::find(1)->update([
        'chat_id'=>$request->chat_id,
      ]);
      return redirect()->back()->with('message','Pengaturan Telegram berhasil disimpan!');
  }


  // public function pengaturan_telegramBot()
  // {
  //     $telegram_settings = Telegram_Settings::all();
  //     return view('pengaturan.pengaturan_telegrambot', ['profile'=>MyLib::getProfile()], compact('selegram_settings'));
  // }


}

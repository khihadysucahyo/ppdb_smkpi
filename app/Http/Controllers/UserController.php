<?php

namespace App\Http\Controllers;

use PDF;
use Auth;
use MyLib;
use View;
use Http\Requests;
use App\Models\Nilai;
use App\Models\Tahun;
use App\Models\Profile;
use App\Models\Pekerjaan;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Requests\SimpanRequest;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function __construct()
    {
        $pengaturan = Pengaturan::get()->first(); //its just a dummy data object.
        View::share('pengaturan', $pengaturan); // Sharing is caring
    }

    public function biodata()
    {
        $nilai   = Nilai::Where('user_id',MyLib::getUser())->get()->first();
        $tahun   = Tahun::all();
        $pekerjaan = Pekerjaan::all();
        return view('peserta.biodata', compact('tahun','pekerjaan','nilai'), ['profile'=>MyLib::getProfile()]);
    }


    public function cetakForm()
    {
        $id=Auth::user()->id;
        $tahun   = Tahun::all();
        $pekerjaan = Pekerjaan::all();
        $profile = Profile::Where('user_id',$id)->get()->first();
        $nilai   = Nilai::Where('user_id',$id)->get()->first();
        $pdf=PDF::loadView('pdf.formulir', compact('profile', 'nilai', 'pekerjaan', 'tahun'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('formulir.pdf');
    }


    public function simpan(SimpanRequest $request)
    {
        Profile::Where('user_id',Auth::user()->id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenkel,
            'gol_darah' => $request->gol_darah,
            'berat_badan' => $request->berat,
            'tinggi_badan'=> $request->tinggi,
            'alamat'=> $request->alamat,
            'agama' => $request->agama,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'tahun_id'=> $request->tahun,
            'no_hp'=>$request->no_hp,
            // Data ortu
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_ortu'=>$request->no_ortu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat_ortu'=> $request->alamat_ortu,
            'status_biodata'=>'Lengkap',
            // 'lampiran'=> MyLib::UpdateLampiran($request),
        ]);

        Nilai::Where('user_id',Auth::user()->id)->update([
            'ipa' => $request->n_ipa,
            'matematika' => $request->n_math,
            'bahasa_indonesia' => $request->n_bindo,
            'bahasa_inggris'=> $request->n_bing,
        ]);
        return redirect('/biodata_saya')->with('message','Data Berhasil disimpan!');
    }


    public function upload(UploadRequest $request)
    {
        Profile::Where('user_id',Auth::user()->id)->update(['foto'=>MyLib::UploadFoto($request)]);
        return redirect()->back()->with('message','Berhasil Upload Foto!');
    }


}

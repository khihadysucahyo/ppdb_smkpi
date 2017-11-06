<?php

namespace App\Http\Controllers;
use PDF;
use Auth;
use MyLib;
use View;
use App\Models\Info;
use App\Models\Profile;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\InformasiRequest;

class InfoController extends Controller
{
    public function __construct()
    {
        $pengaturan = Pengaturan::get()->first(); //its just a dummy data object.
        View::share('pengaturan', $pengaturan); // Sharing is caring
    }

    public function index()
    {
        $profile = Profile::Where('user_id',Auth::user()->id)->get()->first();
        $info = Info::paginate(8);
        return view('info.info', compact('info', 'profile'));
    }

    public function create()
    {
        $profile = Profile::Where('user_id',Auth::user()->id)->get()->first();
        return view('info.create', compact('profile'));
    }

    public function store(InformasiRequest $request)
    {
        Info::create([
            'author' => Auth::user()->id,
            'title' => $request->title,
            'text' => $request->isi_info,
            'lampiran' => MyLib::UploadLampiran($request),
            'gambar' => MyLib::UploadGambar($request),
        ]);

        return redirect('/info')->with('message', 'Berhasil menambahkan info!');
    }

    public function destroy($id)
    {
        $info = Info::find($id);
        Info::destroy($id);
        return redirect('/info')->with('message', 'Info "'.$info->title.'" telah dihapus!');
    }

    public function show($id)
    {
        $profile = Profile::Where('user_id',Auth::user()->id)->get()->first();
        $info = Info::find($id);
        return view('info.show', compact('info', 'profile'));
    }

    public function update(InformasiRequest $request, $id)
    {
        Info::find($id)->update([
            'title'=> $request->title,
            'text' => $request->isi_info,
            'lampiran' => MyLib::UpdateLampiran($request),
            'gambar' => MyLib::UpdateGambar($request),
        ]);
        return redirect('info/'.$id)->with('message', 'Info berhasil disimpan!');
    }

    public function cetakInfo($id)
    {
        $info = Info::find($id);
        $pdf=PDF::loadView('pdf.informasi', compact('info'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('informasi.pdf');
    }

}

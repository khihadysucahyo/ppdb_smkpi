<?php

namespace App\Http\Controllers;

use Auth;
use MyLib;
use View;
use App\User;
use Http\Requests;
use App\Models\Pesan;
use App\Models\Profile;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Events\UserMengirimPesan;
use App\Http\Requests\SendRequest;
use App\Http\Requests\ReplyRequest;

class PesanController extends Controller
{
    public function __construct()
    {
        $pengaturan = Pengaturan::get()->first(); //its just a dummy data object.
        View::share('pengaturan', $pengaturan); // Sharing is caring
    }

    public function index()
    {
        $users     = User::Where('role',2)->get();
        $pesan     = Pesan::Where([['pengirim', 'admin'],  ['id_peserta',Auth::user()->id]])->orderBy('created_at', 'desc')->paginate(8);
        $terkirim  = Pesan::Where([['pengirim', 'peserta'],['id_peserta',Auth::user()->id]])->orderBy('created_at', 'desc')->paginate(8);
        return view('pesan.pesan', compact('users', 'pesan', 'terkirim'));
    }


    public function detail($id)
    {
        $pesan  = Pesan::Where('id_pesan', $id)->where('id_peserta', Auth::user()->id)->get()->first();
        if (!$pesan) {
          return abort(404);
        }
        return view('pesan.detail', compact('pesan'));
    }


    public function send(SendRequest $request)
    {
        Pesan::create([
            'id_peserta' => Auth::user()->id,
            'subjek' => $request->subject,
            'pesan_teks' => $request->pesan,
            'lampiran' => MyLib::UploadLampiran($request),
            'pengirim' => 'peserta',
        ]);
        $id_pesan=Pesan::where('id_peserta', Auth::user()->id)->whereRaw('id_pesan = (select max(`id_pesan`) from pesans)')->get()->first();
        event(new UserMengirimPesan($request,$id_pesan));
        return redirect('/pesan#tulis-pesan')->with('message', 'Pesan berhasil dikirim!');
    }


    public function reply(ReplyRequest $request, $id)
    {
        Pesan::create([
            'id_peserta' => Auth::user()->id,
            'subjek' => $request->subject,
            'pesan_teks' => $request->pesan,
            'lampiran' => MyLib::UploadLampiran($request),
            'pengirim' => 'peserta',
            'jenis_pesan' => 'reply',
        ]);
        $id_pesan=Pesan::where('id_peserta', Auth::user()->id)->whereRaw('id_pesan = (select max(`id_pesan`) from pesans)')->get()->first();
        event(new UserMengirimPesan($request,$id_pesan));
        return redirect('/pesan')->with('message', 'berhasil membalas pesan!');
    }

}

@extends('layouts.dash_admin')

@section('konten')
{{-- Modal Upload --}}
<div id="addPeriode" class="modal offset-l5 col s9 m9 l3">
  <div class="center-align modal-content">
    <form class="form-horizontal" role="form" method="post" action="../pengaturan/tambahperiode">{{ csrf_field() }}
      <center><b>Tambah Periode Pendaftaran Baru?<br><h5>{{$periode->last()->periode+1}}</h5></b></center>
      <input type="hidden" name="periode" value="{{$periode->last()->periode+1}}">
  </div>
  <div class="modal-footer">
    <button type="submit" class="modal-action waves-effect waves-green btn-flat" name="upload">
      <i class="material-icons left">add</i>tambah</a>
    </button>
    <button type="reset" class="modal-action modal-close waves-effect waves-green btn-flat" name="reset">
      <i class="material-icons left">close</i>Cancel</a>
    </button>
  </form>
  </div>
</div>
{{-- End Modal --}}




<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">

        <div class="card">
          <div class="card-content">
            <div class="card-title left-align indigo-text"><i class="material-icons right">settings</i>Pengaturan PPDB</div>
            <div class="card-action ">
              <form class="form-horizontal" role="form" method="post" action="pengaturan">
                  {{ csrf_field() }}
                  <a href="#addPeriode" class="teal-text"><i class="material-icons left">add</i>Tambah Periode Baru</a>
                  <div class="row">
                    <div class="input-field col m3 s12 ">
                      <select name="periode_id" required >
                        <option  disabled selected>Pilih salah satu</option>
                        @foreach ($periode as $per)
                          <option {{ ($per->id==$pengaturan->periode_id) ? 'selected' : '' }} value="{{$per->id}}">{{$per->periode}}</option>
                        @endforeach
                      </select>
                      <label>Periode Pendaftaran</label>
                    </div>

                    <div class="switch col offset-m1 m3 s12">
                      <span style="font-size: .8rem;" class="grey-text">Buka Pendaftaran</span><br>
                      <label>
                        Tutup
                        <input {{ ($pengaturan->buka_pendaftaran==0) ? 'checked' : '' }}  value="0" type="checkbox" name="buka_pendaftaran">
                        <span class="lever"></span>
                        Buka
                      </label>
                    </div>

                    <div class="switch col m3 s12">
                      <span style="font-size: .8rem;" class="grey-text">Tampilkan Hasil Kelulusan</span><br>
                      <label>
                        Off
                        <input {{ ($pengaturan->tampil_hasil_kelulusan==0) ? 'checked' : '' }}  value="0" type="checkbox" name="tampil_hasil_kelulusan">
                        <span class="lever"></span>
                        On
                      </label>
                    </div>

                    <div class="input-field m3 s10">
                      <button  type="submit" class="btn btn-primary right indigo">
                        <i class="material-icons right">save</i>Simpan
                      </button>
                    </div>
                  </div>

                  {{-- <div class="row">
                      <div class="input-field offset-s12">
                        <button  type="submit" class="btn btn-primary right indigo">
                          <i class="material-icons right">save</i>Simpan
                        </button>
                      </div>
                  </div> --}}
              </form>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <form class="form-horizontal" role="form" method="post" action="/pengaturan_telegram">{{ csrf_field() }}
            <div class="card-title left-align indigo-text">
              <i class="material-icons right">settings</i>Pengaturan Telegram BOT Reminder
            </div>
            <div class="card-action ">
                  @if ($errors->any())
                    <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
                    @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                  </div><br>
                  @endif
                  <div class="row">
                    <div class="input-field  col m3 s10 ">
                      <input required  id="nama" type="text"  name="chat_id" value="{{$telegram_settings->chat_id}}">
                      <label for="nama">Chat ID</label>
                    </div>
                  </div>

                  {{-- <div class="row">
                    <div class="input-field  col m12 s10 ">
                      <input required  id="nama" type="text"  name="teks" value="{{$telegram_settings->teks}}">
                      <label for="nama">Teks Reminder</label>
                    </div>
                  </div> --}}

                  <div class="row">
                      <div class="input-field offset-s12">
                        <button  type="submit" class="btn btn-primary right indigo">
                          <i class="material-icons right">save</i>Simpan
                        </button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>


      {{-- end --}}

    </div>


  </div>
</div>
@endsection

@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">

        <div class="card">
          <div class="card-content">
            <div class="card-title left-align indigo-text"><strong>{{$lokasi->title}}</strong></div>
            <div class="card-action ">
              @if ($errors->any())
                <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
                @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
              </div><br>
              @endif
              <form class="form-horizontal" role="form" method="post" action="/lokasi" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <div class="row">
                      <div class="input-field col s12">
                          <textarea  id="teks" name="teks" class="materialize-textarea" >{{$lokasi->teks}}</textarea>
                      </div>
                  </div>

                  <div class="row">
                      <div class="input-field col s12">
                          <span>File Denah:
                            @if ($lokasi->lampiran=='')
                                Tidak ada file denah
                            @else
                            <a href="{{ asset('storage/lampiran/'. $lokasi->lampiran) }}">
                            <i class="material-icons">insert_drive_file</i> {{$lokasi->lampiran}}</a>
                            @endif
                          </span>
                      </div>
                  </div>

                  <div class="row">
                    <div class="file-field input-field col s7">
                      <div class="btn">
                        <span>Upload Lampiran</span>
                        <input id="lampiran-file" type="file" name="lampiran">
                        <input type="hidden" name="tmp_lampiran" value="{{$lokasi->lampiran}}">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate"  type="text" placeholder="file denah pdf/rar jika lebih dari satu">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      <div class="input-field offset-s12">
                        <button  type="submit" class="btn btn-primary right indigo" onclick="if (eval(ukuran)>1.5) { alert('Ukuran Melebihi Batas yaitu 1.5MB'); return false; } else { return true; }">
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

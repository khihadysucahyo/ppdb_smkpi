@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">
  <div class="row">
    <div class="col s11">

      <div class="card">
        <div class="card-content">
          <div class="card-title left-align indigo-text"><strong>Create Info</strong></div>
          <div class="card-action ">
            @if ($errors->any())
              <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
              @foreach ($errors->all() as $err)
                  <li>{{$err}}</li>
              @endforeach
            </div><br>
            @endif
            <form class="form-horizontal" role="form" method="post" action="/info" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                  <div class="input-field col s12">
                    <input   id="title" type="text" class="validate" name="title" value="{{old('title')}}">
                    <label for="title">Title</label>
                  </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <textarea   id="isi_info" class="materialize-textarea"  name="isi_info">{{old('isi_info')}}</textarea>
                        <label for="isi_info">Isi Text</label>
                    </div>
                </div>

                <div class="row">
                  <div class="file-field input-field col s7">
                    <div class="btn">
                      <span>Upload Gambar</span>
                      <input id="lampiran-file" type="file" name="gambar">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate"  type="text" placeholder="ekstensi jpg/png">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="file-field input-field col s7">
                    <div class="btn">
                      <span>Upload Lampiran</span>
                      <input id="lampiran-file" type="file" name="lampiran">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate"  type="text" placeholder="lampiran pdf/rar jika lebih dari satu">
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="input-field offset-s12">
                      <button  type="submit" class="btn btn-primary right indigo" onclick="if (eval(ukuran)>1.5) { alert('Ukuran Melebihi Batas yaitu 1.5MB'); return false; } else { return true; }">
                        <i class="material-icons left">save</i> Create
                      </button>
                    </div>
                </div>

            </form>

          </div>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection

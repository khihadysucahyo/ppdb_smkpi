@extends('layouts.dash')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col offset-s1 s10">
      <!-- Modal Upload Foto -->

      <div id="upload" class="modal offset-l1 col s9 m9 l3">
        <div class="center-align modal-content">
          {{-- <h4>Modal Header</h4> --}}
          @php
            $avatar = ($profile->foto!='') ?  asset('storage/foto/'.$profile->foto) : "/img/default_ava.png";
          @endphp
          <img id="preview" class="center-align" width="200px" class="circle" src="{{$avatar}}">
          <form class="form-horizontal" role="form" method="post" action="/upload" enctype="multipart/form-data">
              {{ csrf_field() }}
            <input required id="input1" type="file" name="foto_upload" class="input" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
            <input type="hidden" name="tmp_foto" value="{{$profile->foto}}">
            {{-- <input type="submit" value="Upload" /><br/> --}}
            <!--untuk menampilkan file gambar yang telah di upload-->
        </div>
        <div class="modal-footer">
          <button type="submit" class="modal-action waves-effect waves-green btn-flat" name="upload">
            <i class="material-icons left">file_upload</i>Upload</a>
          </button>
          <button onclick="batalUpload('{{$avatar}}')" type="reset" class="modal-action modal-close waves-effect waves-green btn-flat" name="reset">
            <i class="material-icons left">close</i>Cancel</a>
          </button>
        </form>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="card-title center-align indigo-text"><strong>Biodata Peserta</strong></div>
          <div class="card-action ">
            <a id="edit" class="waves-effect waves-light indigo btn right"><i class="material-icons left">mode_edit</i>Edit</a>

            <form class="form-horizontal" role="form" method="post" action="/biodata_saya" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="input-field col s12">
                    <input required disabled value="{{$profile->id_registrasi}}" id="disabled" type="text" class="validate" name="id_registrasi">
                    <label for="disabled">ID Registrasi</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input required  id="nisn" type="text" class="validate" name="nisn" value="{{$profile->nisn}}">
                    <label for="nis">NISN</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input required  id="nama" type="text" class="validate" name="nama" value="{{$profile->nama}}">
                    <label for="nama">Nama Lengkap</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input required  id="asal" type="text" class="validate" name="asal" value="{{$profile->asal_sekolah}}">
                    <label for="asal">Asal Sekolah</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input  id="no_un" type="text" class="validate" name="no_un" value="{{$profile->no_peserta_un}}">
                    <label for="no_un">No Peserta Ujian Nasional</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <select required id="mySelect"  name="tahun">
                      <option value="" disabled selected>Pilih salah satu</option>
                      @foreach ($tahun as $tahuns)
                        <option {{ ($profile->tahun_id==$tahuns->id) ? 'selected' : '_' }} value="{{$tahuns->id}}">{{$tahuns->tahun}}</option>
                      @endforeach
                    </select>
                    <label>Tahun Lulus SMA/SLTA</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s6">
                    <input required  id="berat" type="text" class="validate" name="berat" value="{{$profile->berat_badan}}">
                    <label for="berat">Berat Badan (Kg)</label>
                  </div>
                  <div class="input-field col s6">
                    <input required  id="tinggi" type="text" class="validate" name="tinggi" value="{{$profile->tinggi_badan}}">
                    <label for="tinggi">Tinggi Badan (Cm)</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <p style="color:#787878;">Jenis Kelamin</p>
                    <p>
                      <input {{ ($profile->jenis_kelamin=='laki-laki') ? 'checked' : '' }} name="jenkel" value="laki-laki" type="radio" id="lakilaki" />
                      <label for="lakilaki">Laki-laki</label>
                    </p>
                    <p>
                      <input {{ ($profile->jenis_kelamin=='perempuan') ? 'checked' : '' }}  name="jenkel" value="perempuan" type="radio"  id="perempuan" />
                      <label for="perempuan">Perempuan</label>
                    </p>
                    <br>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <select required  name="agama">
                      <option value="" disabled selected>Pilih salah satu</option>
                        <option {{ ($profile->agama=='islam') ? 'selected' : '' }} value="islam">Islam</option>
                        <option {{ ($profile->agama=='kristen') ? 'selected' : '' }} value="kristen">Kristen</option>
                        <option {{ ($profile->agama=='buddha') ? 'selected' : '' }} value="buddha">Buddha</option>
                        <option {{ ($profile->agama=='hindu') ? 'selected' : '' }} value="hindu">Hindu</option>
                    </select>
                    <label>Agama</label>
                  </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea  id="alamat" class="materialize-textarea" name="alamat">{{$profile->alamat}}</textarea>
                        <label for="alamat">Alamat</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input required  id="nama_wali" type="text" name="ortu_wali" class="validate" value="{{$profile->ortu_wali}}">
                        <label for="nama_wali">Nama Orang Tua/Wali</label>
                    </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <select required  name="pekerjaan">
                      <option value="" disabled selected>Pilih salah satu</option>
                      @foreach ($pekerjaan as $pekerjaans)
                        <option {{ ($profile->pekerjaan_id==$pekerjaans->id) ? 'selected' : '_' }}  value="{{$pekerjaans->id}}">{{$pekerjaans->nama_pekerjaan}}</option>
                      @endforeach
                    </select>
                    <label>Pekerjaaan Orang Tua/Wali</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s3">
                    <input required   id="n_ipa" type="text" class="validate" name="n_ipa" value="{{$nilai->ipa}}">
                    <label for="n_ipa">UN IPA</label>
                  </div>
                  <div class="input-field col s3">
                    <input  required  id="n_math" type="text" class="validate" name="n_math" value="{{$nilai->matematika}}">
                    <label for="n_math">UN MATEMATIKA</label>
                  </div>
                  <div class="input-field col s3">
                    <input required  id="n_bindo" type="text" class="validate" name="n_bindo" value="{{$nilai->bahasa_indonesia}}">
                    <label for="n_bindo">UN BAHASA INDONESIA</label>
                  </div>
                  <div class="input-field col s3">
                    <input required  id="n_bing" type="text" class="validate" name="n_bing" value="{{$nilai->bahasa_inggris}}">
                    <label for="n_bing">UN BAHASA INGGRIS</label>
                  </div>
                </div>

                <div class="row">
                  <div class="file-field input-field col s7">
                    <div class="btn">
                      <span>Upload</span>
                      <input  type="file" name="lampiran">
                      <input type="hidden" name="tmp_lampiran" value="{{$profile->lampiran}}">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate"  type="text" placeholder="lampiran pdf/rar jika lebih dari satu">
                    </div>
                  </div>
                  <div class="col s5">
                    @if ($profile->lampiran=='')
                        <span>Anda Belum Mengupload Lampiran!</span>
                    @else
                        <span>Lampiran Anda: <a href="{{ asset('storage/lampiran/'. $profile->lampiran) }}"><i class="material-icons">insert_drive_file</i> {{$profile->lampiran}}</a></span>
                    @endif
                  </div>
                </div>

                <div class="row">
                    <div class="input-field offset-s12">
                      <button  type="submit" class="btn btn-primary right indigo">
                        <i class="material-icons">save</i> Simpan
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

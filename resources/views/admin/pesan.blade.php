@php
  // foreach ($users as $user) {
  //   foreach ($user->profile as $value) {
  //     echo $value->nama;
  //   }
  //   // echo $user->profile->nama;
  // }
  // die();
@endphp
@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">

      <h4>Pesan</h4>
      {{-- <h4>Pesan</h4> --}}
      <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width black">
        <li class="tab col s3"><a href="#kotak-masuk" class="white-text"><i class="material-icons white-text">inbox</i>Kotak Masuk</a></li>
        <li class="tab col s3"><a href="#pesan-terkirim" class="white-text"><i class="material-icons white-text">call_made</i>Pesan Terkirim</a></li>
        <li class="tab col s3"><a href="#tulis-pesan" class="white-text"><i class="material-icons white-text">create</i>Tulis Pesan</a></li>
      </ul>

      {{-- KOTAK MASUK --}}
      <div id="kotak-masuk" class="col s12" style="height:100%;">
        <table class="striped responsive-table">
           <thead>
             <tr>
                 <th>Dari</th>
                 <th>Subject</th>
                 <th>Tanggal Masuk</th>
                 <th>Tools</th>
             </tr>
           </thead>

           <tbody>
           @foreach ($pesan as $pesans)
             <tr>
               @foreach ($users as $user)
                 @if ($user->id==$pesans->id_peserta)
                   <td>{{$user->profile->nama}}</td>
                 @endif
               @endforeach
               <td>{{$pesans->subjek}}</td>
               <td>{{$pesans->created_at}}</td>
               <td><a href="/pesan_admin/{{$pesans->id_pesan}}"><i class="material-icons">remove_red_eye</i></a></td>
             </tr>
           @endforeach
           </tbody>
         </table>
      </div>
      {{-- END --}}

      {{-- Sent --}}
      <div id="pesan-terkirim" class="col s12">
        <table class="striped responsive-table">
           <thead>
             <tr>
                 <th>Kepada</th>
                 <th>Subject</th>
                 <th>Tanggal Terkirim</th>
                 <th>Tools</th>
             </tr>
           </thead>

           <tbody>
             @foreach ($terkirim as $terkirims)
               <tr>
                 @foreach ($users as $user)
                   @if ($user->id==$terkirims->id_peserta)
                     <td>{{$user->profile->nama}}</td>
                   @endif
                 @endforeach
                 <td>{{$terkirims->subjek}}</td>
                 <td>{{$terkirims->created_at}}</td>
                 <td><a href="/pesan_admin/{{$terkirims->id_pesan}}"><i class="material-icons">remove_red_eye</i></a></td>
               </tr>
             @endforeach
           </tbody>
         </table>
      </div>
      {{-- end --}}

      {{-- Bikin Pesan --}}
      <div id="tulis-pesan" class="col s12" style="height:100%">
        <div class="card">
          <div class="card-content">
            <div class="card-title left-align indigo-text"><strong>Tulis pesan</strong></div>
            <div class="card-action ">
              @if ($errors->any())
                <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
                @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
              </div><br>
              @endif
              <form class="form-horizontal" role="form" method="post" action="/pesan_admin" enctype="multipart/form-data">{{ csrf_field() }}
                  <div class="input-field col s12 m6">
                    <select class="icons" name="userid">
                      <option value="" disabled selected>Pilih user tujuan</option>
                      @foreach ($users as $user)
                        @php $avatar = ($user->profile->foto!='') ?  asset('storage/foto/'.$user->profile->foto) : "/img/default_ava.png"; @endphp
                        <option value="{{$user->id}}" data-icon="{{$avatar}}" class="left circle">{{$user->profile->nama}}</option>
                      @endforeach
                    </select>
                    <label>Kepada</label>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input required  id="subject" type="text" class="validate" name="subject">
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <textarea  id="pesan" class="materialize-textarea" name="pesan"></textarea>
                          <label for="pesan">pesan teks</label>
                      </div>
                  </div>
                  <div class="row">
                    <div class="file-field input-field col s7">
                      <div class="btn">
                        <span>Upload</span>
                        <input  type="file" name="lampiran">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate"  type="text" placeholder="lampiran pdf/rar jika lebih dari satu">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="input-field offset-s12">
                        <button  type="submit" class="btn btn-primary right indigo">
                          <i class="material-icons right">send</i> Send
                        </button>
                      </div>
                  </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      {{-- end --}}

    </div>


  </div>
</div>
@endsection

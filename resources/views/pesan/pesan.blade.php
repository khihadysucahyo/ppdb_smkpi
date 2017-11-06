@extends('layouts.app')

@section('konten')

      {{-- <h4>Pesan</h4> --}}
      <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width indigo darken-3">
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
                   @if ($user->id==$pesans->id_admin)
                     <td>[ADMIN] {{$user->name}}</td>
                   @endif
                 @endforeach
                 <td>{{$pesans->subjek}}</td>
                 <td>{{$pesans->created_at}}</td>
                 <td>
                   {{-- <form action="../detail_pesan" method="post"> {{ csrf_field() }}
                     <input type="hidden" name="id_pesan" value="{{$pesans->id_pesan}}">
                     <button type="submit" class="btn_detail" >
                       <i class="material-icons">remove_red_eye</i>
                     </button>
                   </form> --}}
                   <a href="/pesan/{{$pesans->id_pesan}}"><i class="material-icons">remove_red_eye</i></a>
                 </td>
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
                 <td>Admin</td>
                 <td>{{$terkirims->subjek}}</td>
                 <td>{{$terkirims->created_at}}</td>
                 <td><a href="/pesan/{{$terkirims->id_pesan}}"><i class="material-icons">remove_red_eye</i></a></td>
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
              <form class="form-horizontal" role="form" method="post" action="/pesan" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <input type="hidden" name="nama" value="{{Auth::user()->profile->nama}}">

                  <div class="row">
                    <div class="input-field col s12">
                      <input id="subject" type="text" class="validate" name="subject" value="{{old('subject')}}">
                      <label for="subject">Subject</label>
                    </div>
                  </div>

                  <div class="row">
                      <div class="input-field col s12">
                          <textarea id="pesan" class="materialize-textarea" name="pesan">{{old('pesan')}}</textarea>
                          <label for="pesan">pesan teks</label>
                      </div>
                  </div>

                  <div class="row">
                    <div class="file-field input-field col s7">
                      <div class="btn">
                        <span>Upload</span>
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

@endsection

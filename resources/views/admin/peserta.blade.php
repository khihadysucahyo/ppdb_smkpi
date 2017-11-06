@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">

      {{-- <hr> --}}
      <br>
      <div class="row">
        <div class="col m3 s12">
          <h5 class="">Calon Peserta</h5>
        </div>
        <form class="form-horizontal" role="form" method="get" action="../peserta/cari" >
        <div style="height:49px" class="col m8 s10">
          <input  class="border-input" placeholder="no.peserta/nama/asal sekolah" required id="disabled" type="text" name="cari">
        </div>
        <div style="height:49px" class="col m1 s2">
          <button style="border-radius:5px;" type="submit" class="white black-text left tooltipped" data-position="right" data-delay="50" data-tooltip="cari">
            <i class="material-icons">search</i></button>
        </div>
        </form>
      </div>

      {{-- Filter Select --}}
      <div class="row" style="margin-bottom:0px;">
        {{--  serach form--}}
        <form class="form-horizontal" role="form" method="get" action="../peserta/filter">
          {{-- {{ csrf_field() }} --}}
              <div class="col m2 s3">
                <select name="tahun_ajaran"  id="" style="height:30px;">
                  <option value="" disabled selected>Tahun Ajaran</option>
                  {{-- <option value="" selected>All</option> --}}
                  @foreach ($tahun_ajaran as $th)
                    <option @isset($_GET['tahun_ajaran']) {{($_GET['tahun_ajaran']==$th->id) ? 'selected' :''}} @endisset
                      value="{{$th->id}}">{{$th->tahun_ajaran}}</option>
                  @endforeach
                </select>
                <label>Tahun Ajaran</label>
              </div>
              <div class="col m2 s2">
                <select name="jenkel" id="">
                  <option value="" disabled selected>Jenis Kelamin</option>
                  @php $jenkel=isset($_GET['jenkel']) ? $_GET['jenkel'] : ''; @endphp
                  <option {{($jenkel=="laki-laki") ? 'selected' :''}} value="laki-laki">laki-laki</option>
                  <option {{($jenkel=="perempuan") ? 'selected' :''}} value="perempuan">perempuan</option>
                </select>
                <label>Jenis Kelamin</label>
              </div>
              <div class="col m1 s2">
                <select name="agama">
                  <option value="" disabled selected>Agama</option>
                    @php $agama=isset($_GET['agama']) ? $_GET['agama'] : ''; @endphp
                    <option {{($agama=="islam")  ? 'selected' :''}}  value="islam">Islam</option>
                    <option {{($agama=="kristen")? 'selected' :''}}  value="kristen">Kristen</option>
                    <option {{($agama=="buddha") ? 'selected' :''}}  value="buddha">Buddha</option>
                    <option {{($agama=="hindu")  ? 'selected' :''}}  value="hindu">Hindu</option>
                </select>
                <label>Agama</label>
              </div>
              <div class="col m2 s3 ">
                <select  name="status_diterima">
                  <option value="" disabled selected>Status diterima</option>
                    @php $status_diterima=isset($_GET['status_diterima']) ? $_GET['status_diterima'] : ''; @endphp
                    <option {{($status_diterima=="Lulus")       ? 'selected' :''}} value="Lulus">Lulus</option>
                    <option {{($status_diterima=="Tidak Lulus") ? 'selected' :''}} value="Tidak Lulus">Tidak Lulus</option>
                </select>
                <label>Status Diterima</label>
              </div>
              <div class="col m1 s2 ">
                <button type="submit" class="btn btn-primary white black-text left"><b>filter</b></button>
              </div>
        </form>
        {{-- search form --}}
        {{-- Trigger Form --}}
        <div class="col m1 s12"></div>
        <div class="col m2 s10">
          <select required name="aksi" class="browser-default" id="multi_aksi_select" style="height:36px;">
            <option value="" disabled selected>Pilih Aksi</option>
            <option value="../peserta/destroy">Hapus</option>
            <option value="../peserta/update_verifikasi/0">Status verifikasi: Verifikasi</option>
            <option value="../peserta/update_diterima/0">Status diterima: Lulus</option>
            <option value="../peserta/update_diterima/1">Status diterima: Tidak Lulus(default)</option>
          </select>
        </div>
        <div class="col m1 s2">
          <button id="btn_multi_select" disabled type="submit" class="white black-text left  tooltipped"
                  data-position="right" data-delay="50" data-tooltip="apply aksi">
          <i class="material-icons">send</i></button>
        </div>
        {{-- </form> --}}
      </div><hr>
      {{-- end filter --}}

      <table class="striped  responsive-table">
         <thead>
           <tr>
               <th></th>
               <th>No</th>
               <th>No Peserta</th>
               <th>Nama</th>
               <th>Asal Sekolah</th>
               <th>Status Verifikasi</th>
               <th>Status Diterima</th>
               <th style="text-align:center;">Tools</th>
           </tr>
         </thead>
         {{-- <form class="form-horizontal" role="form" action="" method="post"> --}}
         <tbody>
           @php $i=0;@endphp
           @php $no= ($hal<>null) ? ($hal*7)-6 : 1; @endphp
           <form id="multi_aksi_form" class="form-horizontal" role="form" method="post" action="">{{ csrf_field() }}
           @foreach ($users as $user)
             {{-- @if ($user->user_id==$user->user->id && $user->user->role==1) --}}
               <tr>
                 <td class="center">
                   <input type="checkbox" value="{{$user->id}}" name="id[{{$i}}]" id="cek{{$user->id}}">
                   <label for="cek{{$user->id}}"></label>
                 </td>

                 <td>{{$no}}</td>
                 <td>{{$user->profile->no_peserta}}</td>
                 <td>{{$user->profile->nama}}</td>
                 <td>{{$user->profile->asal_sekolah}}</td>
                 <td>{{$user->profile->status_verifikasi}}</td>
                 <td>{{$user->profile->status_diterima}}</td>
                 <td>
                   <a href="edit/{{$user->id}}"><i class="material-icons black-text">mode_edit</i></a>
                   <a href="hapus/{{$user->id}}" onclick="return confirm('hapus peserta {{$user->profile->nama}}?')">
                     <i class="material-icons black-text">delete_forever</i>
                   </a>
                   <a href="cetakform/{{$user->id}}"><i class="material-icons black-text">print</i></a>
                 </td>
               </tr>
               @php $i++; $no++ @endphp
             {{-- @endif --}}
           @endforeach
           </form>
         </tbody>
       </table>
       {{$users->links('vendor.pagination.default')}}
    </div>


  </div>
</div>
@endsection

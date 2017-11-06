@extends('layouts.app')

@section('konten')
<style media="screen">
  .stat{padding:5px; border-radius:5px; font-size: 25px; font-weight: bold;}
</style>
@php $icon=($profile->status_diterima=="Lulus") ? "check_circle" : "error" @endphp

<div class="col s12 m12 l9">
  <div class="row">
    <div class="col s12">
      <h4>Hasil Seleksi</h4>
      <hr>
        <pre>No Peserta     : {{$profile->no_peserta}}</pre>
        <pre>Nama Lengkap   : {{$profile->nama}}</pre>
        <pre>Asal Sekolah   : {{$profile->asal_sekolah}}</pre>
        <pre>Berdasarkan hasil penilaian, Anda dinyatakan:</pre>
        <p class="stat teal lighten-5 z-depth-3 center">
          <i class="material-icons">{{$icon}}</i>{{$profile->status_diterima}}
        </p>
    </div>
  </div>
</div>
@endsection

@extends('layouts.dash_admin')

@section('konten')
  <!-- konten -->
  <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
    <h4>DASHBOARD ADMIN</h4>
    <hr>
      <div class="col s5">
          {{-- <a href="/sekolah"> --}}
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">school</i>SEKOLAH</strong>
                <a class="waves-effect waves-teal" href="/tentang_sekolah">Tentang Sekolah</a> |
                <a class="waves-effect waves-teal" href="/visi_misi">Visi&Misi</a> |
                <a class="waves-effect waves-teal" href="/lokasi">Lokasi</a>
            </div>
          </div>
          {{-- </a> --}}
      </div>

      <div class="col s5">
        {{-- <a href="/peserta"> --}}
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">person</i>USERS</strong>
                <a class="waves-effect waves-teal" href="/user">Admin</a> |
                <a class="waves-effect waves-teal" href="/peserta">Peserta</a>
            </div>
          </div>
        {{-- </a> --}}
      </div>

      <div class="col s5">
        <a href="/info">
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">info</i>INFORMASI</strong>
            </div>
          </div>
        </a>
      </div>

      <div class="col s5">
        <a href="/laporan">
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">book</i>LAPORAN</strong>
            </div>
          </div>
        </a>
      </div>

      <div class="col s5">
        <a href="/pesan">
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">email</i>Pesan</strong>
            </div>
          </div>
        </a>
      </div>

      <div class="col s5">
        <a href="/pengaturan">
          <div class="card">
            <div class="card-content black white-text">
                <strong><i class="material-icons left">settings</i>Settings</strong>
                {{-- <a class="waves-effect waves-teal" href="/ppdb">PPDB</a> |
                <a class="waves-effect waves-teal" href="/telegramBOT">Telegram BOT</a> --}}
            </div>
          </div>
        </a>
      </div>
  </div>

@endsection

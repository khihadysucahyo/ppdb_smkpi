<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style media="screen">
      ul.side-nav.fixed ul.collapsible-accordion a.collapsible-header {padding: 0 30px;}
      .tabs .indicator {background-color: white;}
    </style>
    <script type="text/javascript">
     $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
    </script>
     {!! Charts::assets() !!}
  </head>
  <body>

      <!-- Navbar atas -->
      <div class="navbar-fixed">
        <nav class="black darken-3">
            <div class="nav-wrapper">
              <!-- <a href="#" class="brand-logo">PPDB ONLINE</a> -->
              <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right">
                <li>
                  <a class="waves-effect waves-light btn white black-text" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </div>
        </nav>
      </div>
      <!-- end navbar atas -->


      <!-- Side Nav KS -->
      <div class="row">
            <div class="col s12 m12 l3"> <!-- Note that "m4 l3" was added <-->
                <ul id="slide-out" class="side-nav fixed">
                    <li>
                        <div class="userView black white-text">
                            <div class="background"><!-- <img src="assets/img/background.jpg"> --></div>
                            <a class="btn white-text tooltipped waves-effect waves-light btn-flat secondary-content" data-tooltip="upload foto" href="#upload">
                                <i class="material-icons">file_upload</i>
                            </a>
                            @php
                              $avatar = ($profile->foto!='') ?  asset('storage/foto/'.$profile->foto) : "/img/default_ava.png";
                            @endphp
                            <a class="tooltipped" data-tooltip="<- klik untuk upload foto" data-position="right" href="#!user"><img class="circle" src="{{$avatar}}"></a>
                            {{-- <a class="white-text" href="#modal1"><i class="material-icons">file_upload</i>Modal</a> --}}
                            <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                            <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                          </div>
                      </li>
                      <li><div class="divider"></div></li>

                      {{-- Menu Navigasi --}}
                      <li><a class="waves-effect waves-teal" href="/admin">
                        <i class="material-icons">home</i>Home</a>
                      </li>
                      <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li class="bold"><a class="collapsible-header waves-effect waves-teal"><i class="material-icons">school</i>Sekolah</a>
                            <div class="collapsible-body">
                              <ul>
                                <li><a href="/tentang_sekolah">Tentang Sekolah</a></li>
                                <li><a href="/visi_misi">Visi & Misi</a></li>
                                <li><a href="/lokasi">Lokasi</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li class="bold"><a class="collapsible-header waves-effect waves-teal"><i class="material-icons">person</i>Users</a>
                            <div class="collapsible-body">
                              <ul>
                                <li><a href="/admin/user">Admin</a></li>
                                <li><a href="/peserta">Peserta</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>
                      {{-- <li><a class="waves-effect waves-teal" href="/user"><i class="material-icons">account_box</i>Panitia</a></li>
                      <li><a class="waves-effect waves-teal" href="/peserta"><i class="material-icons">person</i>Peserta</a></li> --}}
                      {{-- <li><a class="waves-effect waves-teal" href="/syarat_alur"><i class="material-icons">content_paste</i>Syarat & Alur</a></li> --}}
                      <li><a class="waves-effect waves-teal" href="/info"><i class="material-icons">info</i>Informasi</a></li>
                      <li><a class="waves-effect waves-teal" href="/laporan"><i class="material-icons">book</i>Laporan</a></li>
                      <li><a class="waves-effect waves-teal" href="/pesan_admin"><i class="material-icons">email</i>Pesan</a></li>
                      <li><a class="waves-effect waves-teal" href="/pengaturan"><i class="material-icons">settings</i>Pengaturan</a></li>
                      {{-- <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li class="bold"><a class="collapsible-header waves-effect waves-teal"><i class="material-icons">settings</i>Pengaturan</a>
                            <div class="collapsible-body">
                              <ul>
                                <li><a href="/pengaturan_ppdb">PPDB</a></li>
                                <li><a href="/pengaturan_telegrambot">Telegram BOT</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li> --}}
                </ul>
            </div>
        <!-- end side nav -->

        {{-- Modal Upload --}}
            <div id="upload" class="modal offset-l5 col s9 m9 l3">
              <div class="center-align modal-content">
                {{-- <h4>Modal Header</h4> --}}
                @php
                  $avatar = ($profile->foto!='') ?  asset('storage/foto/'.$profile->foto) : "/img/default_ava.png";
                @endphp
                <img id="preview" class="center-align" width="200px" class="circle" src="{{$avatar}}">
                <form class="form-horizontal" role="form" method="post" action="/upload" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <input required id="lampiran-file" type="file" name="foto_upload" class="input" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
                  <input type="hidden" name="tmp_foto" value="{{$profile->foto}}">
              </div>
              <div class="modal-footer">
                <button type="submit" class="modal-action waves-effect waves-green btn-flat" name="upload"
                        onclick="if (eval(ukuran)>1.5) { alert('Ukuran Melebihi Batas yaitu 1.5MB'); return false; } else { return true; }">
                  <i class="material-icons left">file_upload</i>Upload</a>
                </button>
                <button onclick="batalUpload('{{$avatar}}')" type="reset" class="modal-action modal-close waves-effect waves-green btn-flat" name="reset">
                  <i class="material-icons left">close</i>Cancel</a>
                </button>
              </form>
              </div>
            </div>
            {{-- End Modal --}}
            @yield('konten')
      </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="/materialize/js/materialize.min.js"></script>
      <script src="/js/custom_admin.js"></script>
      <script>
          $(document).ready(function(){
               $(".button-collapse").sideNav()
               $('select').material_select();
               @if ($errors->has('foto_upload'))
                 Materialize.toast('Upload Foto Gagal! <br> {{$errors->first('foto_upload')}}', 4000, 'red');
               @elseif (Session::get('message'))
                  Materialize.toast('{{Session::get('message')}}', 4000, 'red');
               @endif
               @if (Session::get('destroy_message'))
                  Materialize.toast('{{Session::get('destroy_message')}}', 4000, 'red');
               @endif

          });
      </script>

  </body>
</html>

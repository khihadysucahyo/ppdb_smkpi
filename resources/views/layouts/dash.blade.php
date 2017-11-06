<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Peserta</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="text/javascript">
     $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
    </script>

  </head>
  <body>

      <!-- Navbar atas -->
      <div class="navbar-fixed">
        <nav class="indigo darken-3">
            <div class="nav-wrapper">
              <!-- <a href="#" class="brand-logo">PPDB ONLINE</a> -->
              <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right">
                <li>
                  <a class="waves-effect waves-light btn" href="{{ route('logout') }}"
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
                        <div class="userView blue darken-1">
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
                      <li><a href="/biodata_saya"><i class="material-icons">perm_identity</i>BIODATA SAYA</a></li>
                      <li><a href="/pesan"><i class="material-icons">chat</i>CHAT</a></li>
                </ul>
            </div>
        <!-- end side nav -->
            @yield('konten')
      </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="/materialize/js/materialize.min.js"></script>
      <script src="/js/custom.js"></script>
      <script>
          $(document).ready(function(){
               $('ul.tabs').tabs();
              //  $('.tabs').tabs({swipeable: true});
               $(".button-collapse").sideNav()
               $('select').material_select();
               @if ($errors->has('foto_upload'))
                 Materialize.toast('Upload Foto Gagal! <br> {{$errors->first('foto_upload')}}', 4000, 'red');
               @elseif (Session::get('message'))
                  Materialize.toast('{{Session::get('message')}}', 4000, 'red');
               @endif
          });


      </script>

  </body>
</html>

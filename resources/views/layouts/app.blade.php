<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Public</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <style media="screen">
        body { display: flex; min-height: 100vh; flex-direction: column; background-color: #e6e6fa;}
        main { flex: 1 0 auto; }
        .tabs .indicator {background-color: white;}
}
    </style>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>
  <body>

      <!-- <div class="navbar-fixed"> -->
      {{-- buat dropdown pc --}}
      <ul id="menuDropdown" class="dropdown-content">
        {{-- <li> <a href="/faq">F.A.Q</a></li> --}}
        <li> <a href="/pesan">Buat Pesan</a></li>
      </ul>
      <ul id="dropdownPPDB" class="dropdown-content">
        <li><a href="/list_peserta">Peserta</a></li>
        <li><a href="/info_ppdb">Info PPDB</a></li>
      </ul>
      {{-- buat dropdown gadget --}}
      <ul id="menuDropdown2" class="dropdown-content">
        {{-- <li> <a href="#">F.A.Q</a></li> --}}
        <li> <a href="#">Buat Pesan</a></li>
      </ul>
      <ul id="dropdownPPDB2" class="dropdown-content">
        <li><a href="/list_peserta">Peserta</a></li>
        <li><a href="/info_ppdb">Info PPDB</a></li>
      </ul>
      {{-- end dropdown --}}

          <nav class="indigo darken-3">
              <div class="nav-wrapper container">
                {{-- <a href="#" class="brand-logo">PPDB ONLINE</a> --}}
                <a href="#" data-activates="mobile-menu" class="button-collapse">
                  <i class="material-icons">menu</i>
                </a>

                <ul class="hide-on-med-and-down">
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="/profile">Profile</a></li>
                  <li><a href="#" class="dropdown-button" data-activates="dropdownPPDB">PPDB<i class="material-icons right">keyboard_arrow_down</i></a></li>
                  <li><a href="#" class="dropdown-button" data-activates="menuDropdown">Bantuan<i class="material-icons right">keyboard_arrow_down</i></a></li>
                  @if (Auth::guest())
                    <li class="right"><a href="/login">Login</a></li>
                    <li class="right"><a href="/register">Daftar</a></li>
                  @else
                    @if ($pengaturan->tampil_hasil_kelulusan==0)
                      <li><a href="/hasil_seleksi"><i class="material-icons right">flag</i>Hasil Seleksi</a></li>
                    @endif
                    <li class="right">
                        <a href="#" class="dropdown-button" data-activates="userDropdown">
                          {{ Auth::user()->name }} <span class="caret"></span><i class="material-icons right">keyboard_arrow_down</i>
                        </a>
                        <ul id="userDropdown" class="dropdown-content">
                          <li><a href="/biodata_saya">Biodata</a></li>
                          <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                          </li>
                        </ul>
                    </li>
                  @endif

                </ul>

                <ul class="side-nav" id="mobile-menu">
                  <li><a href="/">Home</a></li>
                  <li><a href="/profile">Profile</a></li>
                  <li><a href="#" class="dropdown-button" data-activates="dropdownPPDB2">PPDB<i class="material-icons right">keyboard_arrow_down</i></a></li>
                  <li><a href="#" class="dropdown-button" data-activates="menuDropdown2">Help <i class="material-icons right">keyboard_arrow_down</i></a></li>
                  @if (Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Daftar</a></li>
                  @else
                    <li class="right">
                        <a href="#" class="dropdown-button" data-activates="userDropdown2">
                          {{ Auth::user()->name }} <span class="caret"></span><i class="material-icons right">keyboard_arrow_down</i>
                        </a>
                        <ul id="userDropdown2" class="dropdown-content">
                          <li><a href="/biodata_saya">Biodata</a></li>
                          <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                          </li>
                        </ul>
                    </li>
                  @endif

                </ul>
              </div>
          </nav>
      <!-- </div> -->
      <br>
      <main>
        <div class="container">
            @yield('konten')
        </div>
      </main>


      <footer class="page-footer indigo darken-3 white-text">
        <div class="container">
          <div class="row">
             <div class="col s12 m12 l4">
               Copyright &copy; 2017
               <br>KHIHADY SUCAHYO PPDB ONLINE
               <br>All Right Reserved
             </div>
             <div class="col s12 m12 l2">
               {{-- <strong>Menu</strong>
               <ul class="putih-text">
                 <li ><a href="#">PHP</a></li>
                 <li><a href="#">JAVA</a></li>
                 <li><a href="#">MySQL</a></li>
               </ul> --}}
             </div>
             {{-- <div class="col s12 m12 l2"><strong>Links</strong></div> --}}
             <div class="col s12 m12 l4">
              <strong>SMK PI AMBARRUKMO 1 SLEMAN</strong>
              <br>
              Jl. Cendrawasih 125 Mancasan lor, Condong Catur, Depok,Sleman 55283
             </div>
          </div>
        </div>

        <div class="footer-copyright indigo darken-4">
          <div class="container">
            <div class="row">

              <div class="col s12 m11 11">
                <a href="#">
                  <i class="material-icons">school</i>
                  <strong>SMK PI AMBARRUKMO 1 SLEMAN</strong>
                </a>
              </div>

              <div class="right col s12 m1 l1">
                  <a href="#"><i class="mdi mdi-facebook-box"></i></a>
                  <a href="#"><i class="mdi mdi-twitter-box"></i></a>
                  <a href="#"><i class="mdi mdi-youtube-box"></i></a>
              </div>

            </div>
          </div>
        </div>
      </footer>



      <!-- <script src="materialize/js/jquery-3.1.1.min.js"></script> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="/materialize/js/materialize.min.js"></script>
      <script src="/js/custom.js"></script>
      <script>
        $(document).ready(function(){
          @if ($errors->any())
            $(document).ready(function(){
              $('#reply').click();
            });
          @endif
          $('.slider').slider();
          $('select').material_select();
          $('.button-collapse').sideNav();
          @if ($errors->has('foto_upload'))
            Materialize.toast('Upload Foto Gagal! <br> {{$errors->first('foto_upload')}}', 4000, 'red');
          @elseif (Session::get('message'))
             Materialize.toast('{{Session::get('message')}}', 4000, 'red');
          @endif
        });
      </script>
  </body>

</html>

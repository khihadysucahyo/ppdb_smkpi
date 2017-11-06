
<!-- Author: Khihady Sucahyo -->

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Public</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
    body {display: flex;min-height: 100vh;flex-direction: column;}
    main {flex: 1 0 auto;}
    input:not(.exc){text-align: center;}
    </style>
  </head>
  <body>

    <main class="container valign-wrapper">
      <div class="row">
          <div class="col s12">
            {{-- <div class="card-panel center-align teal"> --}}
              <h1 class="center-align black-text">404</h1>
              <h4 class="red-black-text center-align" style="margin-top: -25px;">Halaman Tidak Ditemukan</h4>
              <center>
                <a href="/" class="waves-effect waves-light btn-large"><i class="material-icons left">home</i>ke halaman utama</a>
              </center>
              <span>@for ($i=0; $i<200; $i++) &nbsp @endfor</span>
            {{-- </div> --}}
          </div>
      </div>
    </main>

  </body>
</html>

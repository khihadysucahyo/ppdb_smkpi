@extends('layouts.app')

@section('konten')


  <div class="row">
    <div class="col offset-s3 s6">
      <div class="card">
        <div class="card-content">
          <div class="card-title">Register</div>
          <div class="card-action ">
            {{-- filter buka pengaturan --}}
            @if ($pengaturan->buka_pendaftaran==0)
              <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input type="text" name="name" value="" id="name" class="validate" required autofocus>
                  <label for="name" data-success="benar" data-error="salah!">Nama Lengkap</label>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input type="email" name="email" value="" id="email" class="validate" required>
                  <label for="email" data-success="benar" data-error="salah!">Email</label>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">vpn_key</i>
                  <input type="password" name="password" value="" id="password" class="validate" required>
                  <label for="password" data-success="benar" data-error="salah!">Password</label>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="input-field">
                  <i class="material-icons prefix"></i>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  <label for="password-confirm" data-success="benar" data-error="salah!">Ulangi Password</label>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="input-field">
                  {{-- <input type="hidden" name="tahun_ajaran" value="{{$pengaturan->tahun_ajaran}}"> --}}
                  <input type="submit" name="login" value="Daftar" id="" class="btn">
                </div>
              </form>
            {{-- End filter buka pengaturan --}}
            @else
                <pre><i class="material-icons left">warning</i>PENDAFTARAN BELUM DIBUKA!</pre>
            @endif


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

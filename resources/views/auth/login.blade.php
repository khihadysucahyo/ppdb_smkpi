@extends('layouts.app')

@section('konten')

  <div class="row">
    <div class="col offset-s3 s6">
      <div class="card">
        <div class="card-content">
          <div class="card-title">Login Area</div>
          <div class="card-action ">
            @if ($errors->any())
              <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
              @foreach ($errors->all() as $err)
                  <li>{{$err}}</li>
              @endforeach
            </div><br><br>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <label for="icon_prefix" data-success="benar" data-error="salah!">Email</label>
                {{-- @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif --}}
              </div>
              <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="form-control" name="password" required>
                <label for="icon_prefix" data-success="benar" data-error="salah!">Password</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="input-field">
                <input type="submit" name="login" value="Login" id="" class="btn">
                <a class="btn" href="{{ route('password.request') }}">
                    Lupa Password?
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection

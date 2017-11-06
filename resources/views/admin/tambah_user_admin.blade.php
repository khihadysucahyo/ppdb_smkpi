@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">
  <div class="row">
    <div class="col offset-s1 s10">

      <div class="card">
        <div class="card-content">
          <div class="card-title left-align indigo-text"><strong>Tambah User</strong></div>
            @php $notifErr='z-depth-1 #ffebee red lighten-5 red-text'; @endphp
          <div class="card-action ">
            @if ($errors->any())
              <div class="col s12 z-depth-1 #ffebee red lighten-5 red-text" style="border-radius:5px; padding:5px;">
              @foreach ($errors->all() as $err)
                  <li>{{$err}}</li>
              @endforeach
            </div><br>
            @endif
            <form class="form-horizontal" role="form" method="post" action="tambah_user">
              {{ csrf_field() }}

              <div class="row">
                <div class="input-field col s12">
                  <input required  id="nama" type="text"  name="name" value="{{old('name')}}">
                  <label for="nama">Nama</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required  id="email" type="email"  name="email" value="{{old('email')}}">
                  <label for="email">email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input required  id="password" type="password"  name="password" value="{{old('password')}}">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  <label for="password-confirm" data-success="benar" data-error="salah!">Ulangi Password</label>
                </div>
              </div>

              {{-- <div class="row">
                <div class="input-field col s12">
                  <p style="color:#787878;">Role</p>
                  @if($errors->has('role')) <li><span class="{{$notifErr}}">{{$errors->first('role')}}</span></li> @endif
                  <p>
                    <input required name="role" value="admin" type="radio" id="roleadmin" />
                    <label for="roleadmin">Admin</label>
                  </p>
                  <p>
                    <input required name="role" value="2" type="radio"  id="rolepanitia" />
                    <label for="rolepanitia">Panitia</label>
                  </p>
                  <br>
                </div>
              </div> --}}


              <div class="row">
                <div class="input-field offset-s12">
                  <button  type="submit" class="btn btn-primary right indigo">
                    <i class="material-icons right">add</i> Add
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection

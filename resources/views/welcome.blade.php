@extends('layouts.app')

@section('konten')
{{--
    @if (Auth::user()->role==2)
      <div class="row">
          <div class="col-m8">
            <h2>Halo Admin
            </h2>
            <br><br><br><br><br><br><br><br><br>
          </div>
      </div>
    @endif
    @if (Auth::user()->role==1)
      <div class="row">
          <div class="col-m8">
            <h2>Halo Peserta
            </h2>
            <br><br><br><br><br><br><br><br><br>
          </div>
      </div>
      @endif --}}
      <div class="slider">
        <ul class="slides">
          {{-- <li><img src="/img/skuat.jpg" alt=""></li>
          <li><img src="/img/banner1.jpg" alt=""></li> --}}
          <li><img src="/img/banner2.jpg" alt=""></li>
        </ul>
      </div>





@endsection

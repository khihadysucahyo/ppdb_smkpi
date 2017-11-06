@extends('layouts.app')

@section('konten')

  <div class="card">
    <div class="card-content">
      <div class="card-title left-align indigo-text"><strong>{{$info->title}}</strong></div>
      <div class="card-action ">
        {{-- <textarea required  id="isi_info" class="materialize-textarea"  name="isi_info">{{$info->text}}</textarea> --}}
        <p>{{$info->text}}</p><br>
        <span><img src="{{asset('storage/foto/'.$info->gambar)}}" alt=""></span>
        @if ($info->lampiran<>'')
          <p class="right-align"><a href="{{asset('storage/lampiran/'.$info->lampiran)}}"><i class="material-icons">insert_drive_file</i>  {{$info->lampiran}}</a></p>
        @endif
      </div>
    </div>
  </div>

@endsection

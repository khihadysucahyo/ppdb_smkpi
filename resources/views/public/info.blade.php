@extends('layouts.app')

@section('konten')

   <div class="collection">
     @foreach ($info as $infos)
       <a href="info_ppdb/{{$infos->id}}" class="collection-item"><span class="badge">{{$infos->created_at}}</span>{{$infos->title}}</a>
     @endforeach
   </div>
  {{$info->links('vendor.pagination.default')}}

@endsection

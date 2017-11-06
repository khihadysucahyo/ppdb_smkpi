@extends('layouts.app')

@section('konten')

  <table class="striped responsive-table">
     <thead>
       <tr>
           <th>No Peserta</th>
           <th>Nama</th>
           <th>Asal Sekolah</th>
           <th>Status Biodata</th>
           <th style="text-align:center;">Status Verifikasi</th>
       </tr>
     </thead>

     <tbody>
       @foreach ($users as $user)
         <tr>
           <td>{{$user->profile->no_peserta}}</td>
           <td>{{$user->profile->nama}}</td>
           <td>{{$user->profile->asal_sekolah}}</td>
           <td>{{$user->profile->status_biodata}}</td>
           <td style="text-align:center;">{{$user->profile->status_verifikasi}}</td>
         </tr>
       @endforeach
     </tbody>
   </table>
   {{$users->links('vendor.pagination.default')}}

@endsection

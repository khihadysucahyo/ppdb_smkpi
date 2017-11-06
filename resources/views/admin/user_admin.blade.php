@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">

      {{-- <hr> --}}
      <div class="row">
        <div class="col m2 s12">
          <h5 class="">User Admin</h5>
          <a href="tambah_user"><i class="material-icons left">person_add</i>Tambah User</a>
        </div>
        {{-- <form class="form-horizontal" role="form" method="post" action="/peserta">{{ csrf_field() }}
              <div class="input-field offset-m6 col m3 s10">
                <select class="browser-default">
                  <option value="" disabled selected>Pilih Aksi</option>
                  <option value="1">Hapus</option>
                  <option value="2">Status diterima: Lulus</option>
                  <option value="2">Status diterima: Tidak Lulus(default)</option>
                </select>
              </div>
              <div class="input-field col m1 s2">
                <button type="submit" class="btn btn-primary indigo z-depth-3">Apply</button>
              </div> --}}
        {{-- </form> --}}
      </div><hr>
      <table class="striped highlight">
         <thead>
           <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Email</th>
               {{-- <th>role</th> --}}
               <th style="text-align:center;">Tools</th>
           </tr>
         </thead>
         {{-- <form class="form-horizontal" role="form" action="" method="post"> --}}
         <tbody>
           @php $i=1; @endphp
           @foreach ($users as $user)
               <tr>
                 {{-- <td class="center"><input type="checkbox" value="{{$user->user_id}}" name="id[{{$i}}]" id="cek{{$user->user_id}}"><label for="cek{{$user->user_id}}"></label></td> --}}
                 <td>{{$i}}</td>
                 <td>{{$user->name}}</td>
                 <td>{{$user->email}}</td>
                 {{-- <td>{{$user->role}}</td> --}}
                 <td style="text-align:center;">
                   <a href="edit/{{$user->id}}"><i class="material-icons black-text">mode_edit</i></a>
                   <a href="../../hapus/{{$user->id}}" onclick="return confirm('hapus peserta {{$user->email}}?')">
                     <i class="material-icons black-text">delete_forever</i>
                   </a>
                   <a href="cetakform/{{$user->user_id}}"><i class="material-icons black-text">print</i></a>
                 </td>
               </tr>
               @php $i++; @endphp
           @endforeach
         </tbody>
       </table>
       {{-- </form> --}}
       {{$users->links('vendor.pagination.default')}}
    </div>


  </div>
</div>
@endsection

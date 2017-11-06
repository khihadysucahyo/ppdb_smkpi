@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">
      <h4>Control Panel Informasi</h4>

      <a href="/info/create" class="waves-effect waves-light btn white black-text"><i class="material-icons left">create</i>Tambahkan Info</a>
      <table class="striped responsive-table">
         <thead>
           <tr>
               {{-- <th>ID Info</th> --}}
               <th>Title</th>
               <th>Cretaed at</th>
               {{-- <th>Updated at</th> --}}
               <th>Tools</th>
           </tr>
         </thead>

         <tbody>
           @foreach ($info as $infos)
             <tr>
               {{-- <td>{{$infos->id}}</td> --}}
               <td>{{$infos->title}}</td>
               <td>{{$infos->created_at}}</td>
               {{-- <td>{{$infos->updated_at}}</td> --}}
               <td>
                 <a href="info/{{$infos->id}}"><i class="material-icons black-text">mode_edit</i></a>
                 {{-- {{ Form::open(array('url' => 'info/'.$infos->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Yakin ingin menghapus?")')) }}
                 {{ csrf_field() }}
                 <button style="padding:0;border:none;background:none;" type="submit"><i class="material-icons black-text">delete_forever</i></button>
                 {{ Form::close() }} --}}
                 <a href="/hapusinfo/{{$infos->id}}" onclick="return confirm('hapus info {{$infos->title}}?')">
                   <i class="material-icons black-text">delete_forever</i>
                 </a>
                 <a href="cetakinfo/{{$infos->id}}"><i class="material-icons black-text">print</i></a>
               </td>
             </tr>
           @endforeach
         </tbody>
       </table>
       {{$info->links('vendor.pagination.default')}}
    </div>


  </div>
</div>
@endsection

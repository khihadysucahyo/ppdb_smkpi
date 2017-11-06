@extends('layouts.app')

@section('konten')

  <ul class="collapsible popout" data-collapsible="expandable">
     <li>
       <div class="collapsible-header"><i class="material-icons">school</i>Tentang Sekolah</div>
       <div class="collapsible-body"><p align="justify">{{$tentang_sekolah->teks}}</p>
         @if ($tentang_sekolah->lampiran!='')
           <hr>
           <span>Lampiran:
               <a href="{{ asset('storage/lampiran/'. $tentang_sekolah->lampiran) }}">
               <i class="material-icons">insert_drive_file</i> {{$tentang_sekolah->lampiran}}</a>
             </span>
          @endif
        </div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">whatshot</i>Visi & Misi</div>
       <div class="collapsible-body"><p align="justify">{{$visi_misi->teks}}</p>
         @if ($visi_misi->lampiran!='')
           <hr>
           <span>Lampiran:
               <a href="{{ asset('storage/lampiran/'. $visi_misi->lampiran) }}">
               <i class="material-icons">insert_drive_file</i> {{$visi_misi->lampiran}}</a>
             </span>
          @endif
       </div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">place</i>Lokasi</div>
       <div class="collapsible-body"><p align="justify">{{$lokasi->teks}}</p>
         @if ($lokasi->lampiran!='')
           <hr>
           <span>Lampiran:
               <a href="{{ asset('storage/lampiran/'. $lokasi->lampiran) }}">
               <i class="material-icons">insert_drive_file</i> {{$lokasi->lampiran}}</a>
             </span>
          @endif
       </div>
     </li>
  </ul>
  <br>


@endsection

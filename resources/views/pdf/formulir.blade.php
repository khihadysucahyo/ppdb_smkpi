<style media="screen">
body {
padding: .2in;
}
.font {
    font-family: "Times New Roman", Georgia, Serif;
    font-size:12px;
    padding: 10px;
}

</style>

<table border="">
  <tr>
    <td style="text-align:left;" width="10">
      <img src="img/logo.png" width="70" alt="">
    </td>
    <td style="text-align:center; " width="100" >
      <strong  style="font-size:14px;">E-FORM PPDB</strong>
    </td>
    <td style="text-align:right;">
      <strong style="font-size:14px;">SMK PI AMBARRUKMO 1 SLEMAN <br></strong>
      <span style="font-size:12px;"><i>Jl. Cendrawasih 125 Mancasan lor, Condong Catur, Depok, Sleman Telp. (0274)4477515 <br>
      Website: http://localhost/psbonline | E-Mail: smkpiambarrukmo@yahoo.co.id
      </i></span>
    </td>
  </tr>
</table>

<hr style="border-width: 2px;">

<br>
<div class="font" style="margin-left:25px;">
  <b>A. DATA PRIBADI</b><br><br>
  <table border="" >
    <tbody>
      <tr>
        <td height="15" width="150">No Peserta</td>
        <td>: </td>
        <td>{{$profile->no_peserta}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Nama Lengkap</td>
        <td>: </td>
        <td>{{$profile->nama}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Tempat, Tanggal Lahir</td>
        <td>: </td>
        <td>{{$profile->tempat_lahir}}, {{date('j F Y', strtotime($profile->tanggal_lahir))}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Jenis Kelamin</td>
        <td>: </td>
        <td>{{$profile->tempat_lahir}}, {{$profile->jenis_kelamin}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Agama</td>
        <td>: </td>
        <td>{{$profile->agama}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Berat Badan</td>
        <td>: </td>
        <td>{{$profile->berat_badan}} kg</td>
      </tr>
      <tr>
        <td height="15" width="150">Tinggi Badan</td>
        <td>: </td>
        <td>{{$profile->tinggi_badan}} cm</td>
      </tr>
      <tr>
        <td height="15" width="150">Golongan Darah</td>
        <td>: </td>
        <td>{{$profile->gol_darah}}</td>
      </tr>
    </table>
    <br>
    <b>B. DATA ORANG TUA</b><br><br>
    <table border="">
      <tr>
        <td height="15" width="150">Nama Ayah</td>
        <td>: </td>
        <td>{{$profile->nama_ayah}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Pekerjaan Ayah</td>
        <td>: </td>
        <td>
          @foreach ($pekerjaan as $pekerjaans)
            {{($pekerjaans->id==$profile->pekerjaan_ayah) ? $pekerjaans->nama_pekerjaan : ''}}
          @endforeach
        </td>
      </tr>
      <tr>
        <td height="15" width="150">Nama Ibu</td>
        <td>: </td>
        <td>{{$profile->nama_ibu}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Pekerjaan Ayah</td>
        <td>: </td>
        <td>
          @foreach ($pekerjaan as $pekerjaans)
            {{($pekerjaans->id==$profile->pekerjaan_ibu) ? $pekerjaans->nama_pekerjaan : ''}}
          @endforeach
        </td>
      </tr>
      <tr>
        <td height="15" width="150">Alamat</td>
        <td>: </td>
        <td>{{$profile->alamat_ortu}}</td>
      </tr>
      <tr>
        <td height="15" width="150">Telepon</td>
        <td>: </td>
        <td>{{$profile->no_ortu}}</td>
      </tr>
    </tbody>
  </table>
</div>

<br>

<table border="1" align="center" style="text-align: center;" class="font">
  <thead>
    <tr>
      <td colspan="4">Nilai ujian Nasional</td>
    </tr>
    <tr>
      <td width="90">Matematika</td>
      <td width="90">IPA</td>
      <td width="90">Bahasa Indonesia</td>
      <td width="90">Bahasa Inggris</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$nilai->matematika}}</td>
      <td>{{$nilai->ipa}}</td>
      <td>{{$nilai->bahasa_indonesia}}</td>
      <td>{{$nilai->bahasa_inggris}}</td>
    </tr>
  </tbody>
</table>

@php
  $BulanIndo = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $tanggal = date('j').' '.$BulanIndo[date('n')-1].' '.date('Y');
@endphp

<br><br><br>
<table align="center" style="text-align:center;" border="" class="font">
  <tr>
    <td width="100" rowspan="3"><img src="storage/foto/{{$profile->foto}}" width="90" height="115" alt=""></td>
    <td width="20" rowspan="3"> </td>
    <td width="100">Yogyakarta, {{$tanggal}}</td>
  </tr>
  <tr>
    <td height="50"></td>
  </tr>
  <tr>
    <td>{{$profile->nama}}</td>
  </tr>
</table>

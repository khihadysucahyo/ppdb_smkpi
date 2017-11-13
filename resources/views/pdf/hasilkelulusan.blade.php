<style media="screen">
body {
padding: .2in;
}
.font {
    font-family: "Times New Roman", Georgia, Serif;
    font-size:13px;
    padding: 10px;
}
.fontdoang {
    font-family: "Times New Roman", Georgia, Serif;
    font-size:13px;
}

</style>

<table border="">
  <tr>
    <td style="text-align:left;" width="10">
      <img src="img/logo.png" width="70" alt="">
    </td>
    <td style="text-align:center; " width="100" >
      {{-- <strong  style="font-size:14px;">E-FORM PPDB</strong> --}}
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
  <b>Hasil Seleksi</b><br><br>
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
        <td height="15" width="150">Asal Sekolah</td>
        <td>: </td>
        <td>{{$profile->asal_sekolah}}</td>
      </tr>
    </tbody>
  </table>
  <p class="fontdoang">Berdasarkan hasil penilaian, Anda dinyatakan: <b>{{strtoupper($profile->status_diterima)}}</b></p>
</div>

@php
  $BulanIndo = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $tanggal = date('j').' '.$BulanIndo[date('n')-1].' '.date('Y');
@endphp

<br><br><br>
<table class="fontdoang" align="right" style="text-align:center;" border="">
  <tr>
    <td width="100">Sleman, {{$tanggal}}</td>
    {{-- <td width="100" rowspan="3"> </td> --}}
  </tr>
  <tr>
    <td height="50"></td>
  </tr>
  <tr>
    <td>Panitia PPDB</td>
  </tr>
</table>

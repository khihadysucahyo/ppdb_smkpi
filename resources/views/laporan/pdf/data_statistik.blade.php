<style media="screen">
body {
padding: .2in;
}
table {
    border-collapse: collapse;
}
.font {
    font-family: "Times New Roman", Georgia, Serif;
    font-size:12px;
    padding: 10px;
}
</style>
<table border="" align="center">
  <tr>
    <td style="text-align:left;" width="10">
      <img src="img/logo.png" width="70" alt="">
    </td>
    <td style="text-align:center; " width="100" >
      <strong style="font-size:14px;">Calon Peserta</strong>
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
<div class="font" style="margin-left:0px;">
<table border="1" align="center">
  <thead style="font-weight:bold;">
    <tr style="width:100%;">
      <td colspan="7" style="width:100%;"><h4>Daftar Peserta PPDB TA 2017/2018</h4></td>
    </tr>
    <tr>
      <td width="20">No</td>
      <td width="120">Nama</td>
      <td width="200">Asal Sekolah</td>
      <td width="120">Email</td>
      <td width="60">Hp</td>
      <td width="120">Orang tua</td>
      <td width="50">Paraf</td>
    </tr>
  </thead>
  <tbody>
    @php
      $i=1;
    @endphp
    @foreach ($users as $user)
      <tr>
        <td>{{$i}}.</td>
        <td>{{$user->profile->nama}}</td>
        <td>{{$user->profile->asal_sekolah}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->profile->no_hp}}</td>
        <td>{{$user->profile->ortu_wali}}</td>
        <td></td>
      </tr>
      @php $i++; @endphp
    @endforeach
  </tbody>
</table>

@php
  $BulanIndo = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $tanggal = date('j').' '.$BulanIndo[date('n')-1].' '.date('Y');
@endphp

<br><br><br>
<table align="right" style="text-align:center;" border="">
  <tr>
    <td width="100">Yogyakarta, {{$tanggal}}</td>
    <td width="100" rowspan="3"> </td>
  </tr>
  <tr>
    <td height="50"></td>
  </tr>
  <tr>
    <td>Panitia PPDB</td>
  </tr>
</table>
</div>


<style media="screen">
body {
padding: .2in;
}
table.font {
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
      <strong style="font-size:14px;">Informasi Sekolah</strong>
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
<div class="" style="margin-left:25px;">
  <table border="" class="font">
    <tbody>
      <tr>
        <td>Kepada</td>
        <td>: </td>
        <td>Seluruh Calon Peserta PPDB</td>
      </tr>
      <tr>
        <td>Perihal</td>
        <td>: </td>
        <td>{{$info->title}}</td>
      </tr>
      <tr>
        <td style="text-align:left;vertical-align:top;padding:0">Informasi</td>
        <td style="text-align:left;vertical-align:top;padding:0">: </td>
        <td>{{$info->text}}</td>
      </tr>
    </table>
    <br>
</div>


@php
  $BulanIndo = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $tanggal = date('j').' '.$BulanIndo[date('n')-1].' '.date('Y');
@endphp

<br><br><br>
<table align="right" style="text-align:center;" border="" class="font">
  <tr>
    <td width="100">Yogyakarta, {{$tanggal}}</td>
    <td width="20" rowspan="3"> </td>
  </tr>
  <tr>
    <td height="50"></td>
  </tr>
  <tr>
    <td>Panitia PPDB</td>
  </tr>
</table>

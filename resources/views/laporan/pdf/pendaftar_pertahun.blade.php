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
pre.prefont{

}
</style>
<table border="" align="center">
  <tr>
    <td style="text-align:left;" width="10">
      <img src="img/logo.png" width="70" alt="">
    </td>
    <td style="text-align:left; " width="100" >
      {{-- <strong style="font-size:14px;">Pendaftar Pertahun</strong> --}}
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
{{-- <pre class="prefont">
Tahun Ajaran    : {{$tahun_ajaran->tahun_ajaran}}
Total Pendaftar : {{count($users)}}
</pre> --}}
<div class="font" style="margin-left:-5px;">
<center><pre style="font-size:13px;">Laporan Data Pendaftar Pertahun</pre></center>
<table border="1" align="left">
  <thead style="font-weight:bold;">
    <tr>
      <td width="20">No</td>
      <td width="240">Tahun Ajaran</td>
      <td width="220">Jumlah Pendaftar</td>
    </tr>
  </thead>
  <tbody>
    @php
      $i=1;
    @endphp
    @foreach ($users as $user)
      <tr>
        <td>{{$i}}.</td>
        <td>{{$user->tahun_ajaran}}</td>
        <td>{{$user->jml_pendaftar}}</td>
      </tr>
      @php $i++; @endphp
    @endforeach
  </tbody>
</table><br><br>

@php
  $BulanIndo = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  $tanggal = date('j').' '.$BulanIndo[date('n')-1].' '.date('Y');
@endphp

<br><br><br>
<table align="right" style="text-align:center;" border="">
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
</div>


<table border="">
  <tr>
    <td style="text-align:left;" width="10">
      <img src="img/logo.png" width="70" alt="">
    </td>
    <td style="text-align:center; " width="100" >
      <strong>E-FORM PPDB</strong>
    </td>
    <td style="text-align:right;">
      <strong>SMK PI AMBARRUKMO 1 SLEMAN <br></strong>
      <span style="font-size:12px;"><i>Jl. Cendrawasih 125 Mancasan lor, Condong Catur, Depok, Sleman Telp. (0274)4477515 <br>
      Website: http://localhost/psbonline | E-Mail: smkpiambarrukmo@yahoo.co.id
      </i></span>
    </td>
  </tr>
</table>

<hr style="border-width: 1px;">

<br>
<div class="" style="margin-left:25px;">
  <table border="">
    <tbody>
      <tr>
        <td height="20" width="150">No Pendaftaran</td>
        <td>: </td>
        <td width="310" style="border: 1px solid black; padding-left:5px;"> -noDB- </td>
      </tr>
      <tr>
        <td height="20">NISN</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->nisn}}</td>
      </tr>
      <tr>
        <td height="20" width="150">Nama Lengkap</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->nama}}</td>
      </tr>
      <tr>
        <td height="20" width="150">Asal Sekolah</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->asal_sekolah}}</td>
      </tr>
      <tr>
        <td height="20" width="150">Nomor Handphone</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->no_hp}}</td>
      </tr>
      <tr>
        <td height="20" width="150">No Peserta UN</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->no_peserta_un}}</td>
      </tr>
      <tr>
        <td height="20" width="150">Tahun Kelulusan</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">
          {{($profile->tahun_id<>0) ? $profile->tahun->tahun : ''}}
        </td>
      </tr>
      <tr>
        <td height="20" width="150">Berat Badan</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->berat_badan}} kg</td>
      </tr>
      <tr>
        <td height="20" width="150">Tinggi Badan</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->tinggi_badan}} cm</td>
      </tr>
      <tr>
        <td height="20" width="150">Alamat Tinggal</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->alamat}}</td>
      </tr>
      <tr>
        <td height="20" width="150">Orang Tua/Wali</td>
        <td>: </td>
        <td style="border: 1px solid black; padding-left:5px;">{{$profile->ortu_wali}}</td>
      </tr>
    </tbody>
  </table>
</div>

<br>

<table border="1" align="center" style="text-align: center;">
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
<table align="center" style="text-align:center;" border="">
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

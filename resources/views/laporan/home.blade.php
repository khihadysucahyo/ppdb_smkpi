@extends('layouts.dash_admin')

@section('konten')

<div class="col s12 m12 l9">

  <div class="row">
    <div class="col s11">
      <div class="card">
        <div class="card-content">
          <div class="card-title left-align indigo-text"><i class="material-icons right">report</i>Laporan PPDB</div>
          <div class="card-action ">
            <form id="form_laporan" class="form-horizontal" role="form" method="post" action="">
                {{ csrf_field() }}

                <div class="row">
                  <div class="input-field col m5 s12 ">
                    <select id="select_laporan" name="jenis_laporan" required>
                      <option  disabled selected>Pilih salah satu</option>
                      <option  value="../laporan/data_pendaftar">Laporan Data Pendaftar</option>
                      <option  value="../laporan/pendaftar_pertahun">Laporan Jumlah Pendaftar Pertahun</option>
                      {{-- <option  value="../laporan/statistik">Laporan Statistik Pendaftar</option> --}}
                      <option  value="../laporan/data_kelulusan">Laporan Kelulusan</option>
                    </select>
                    <label>Jenis Laporan</label>
                  </div>

                  <div id="div_ta" style="display:none;" class="input-field col m3 s12 ">
                    <select name="tahun_ajaran" required >
                      <option  disabled selected>Pilih salah satu</option>
                      @foreach ($periode as $periode_)
                        <option value="{{$periode_->id}}">{{$periode_->tahun_ajaran}}</option>
                      @endforeach
                    </select>
                    <label>Tahun Ajaran</label>
                  </div>


                  <div class="input-field m3 s10">
                    <button id="btnSub" disabled type="submit" class="btn btn-primary right indigo">
                      <i class="material-icons left">print</i>cetak
                    </button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col m5">
        {!! $chartBio->render() !!}
      </div>
      <div class="col m5">
        {!! $chartKelulusan->render() !!}
      </div>
      <div class="col m5">
        {!! $chart->render() !!}
      </div>
      <div class="col m5">
        {!! $chartAgama->render() !!}
      </div>
      <div class="col m5">
        {!! $dt_pertahun->render() !!}
      </div>

      {{-- <h4>STATISTIK</h4>
      <center>
          {!! $chart->render() !!}
      </center>
      <center>
          {!! $dt_pertahun->render() !!}
      </center> --}}
    </div>

  </div>
</div>
@endsection

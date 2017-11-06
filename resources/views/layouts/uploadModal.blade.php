<div id="upload" class="modal offset-l1 col s9 m9 l3">
  <div class="center-align modal-content">
    {{-- <h4>Modal Header</h4> --}}
    @php
      $avatar = ($profile->foto!='') ?  asset('storage/foto/'.$profile->foto) : "/img/default_ava.png";
    @endphp
    <img id="preview" class="center-align" width="200px" class="circle" src="{{$avatar}}">
    <form class="form-horizontal" role="form" method="post" action="/upload" enctype="multipart/form-data">
        {{ csrf_field() }}
      <input required id="input1" type="file" name="foto_upload" class="input" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />
      <input type="hidden" name="tmp_foto" value="{{$profile->foto}}">
      {{-- <input type="submit" value="Upload" /><br/> --}}
      <!--untuk menampilkan file gambar yang telah di upload-->
  </div>
  <div class="modal-footer">
    <button type="submit" class="modal-action waves-effect waves-green btn-flat" name="upload">
      <i class="material-icons left">file_upload</i>Upload</a>
    </button>
    <button onclick="batalUpload('{{$avatar}}')" type="reset" class="modal-action modal-close waves-effect waves-green btn-flat" name="reset">
      <i class="material-icons left">close</i>Cancel</a>
    </button>
  </form>
  </div>
</div>

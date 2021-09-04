<a href="/guru/modul" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>

<h4><b>Tambah Modul</b></h4>


<form action="/guru/modul" enctype="multipart/form-data" method="post">
  @csrf
  <div class="row">
    <div class="col-md-3">
      <label for="" class="pull-right">Nama Modul</label>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <input type="text" class="form-control" name="nama_modul" value="" placeholder="Nama Modul">
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-3">
      <label for="" class="pull-right">File Modul</label>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <input type="file" class="form-control" name="file" value="" placeholder="Nama Modul">
        <small>* Hanya menerima file berformat pdf</small>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-3">
      <label for="" class="pull-right">Deskripsi/Pengantar</label>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <textarea name="deskripsi" class="form-control" id="editor"></textarea>
      </div>
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
      <button type="submit" class="btn btn-primary px-5">Buat</button>
    </div>
  </div>
  
</form>


{{-- <script src="/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script> --}}
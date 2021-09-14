<a href="/guru/modul" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>

<h4><b>{{$title}}</b></h4>



@if (!Request::is('guru/modul/create'))
<form action="/guru/modul/{{$modul->id}}" enctype="multipart/form-data" method="post">
  @method('put')    
  
  @else
  <form action="/guru/modul" enctype="multipart/form-data" method="post">
@endif



  @csrf
  <div class="row">
    <div class="col-md-3">
      <label for="" class="pull-right">Nama Modul</label>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{isset($modul) ? $modul->name : old('name')}}" placeholder="Nama Modul">
        @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>
    </div>
  </div>

  <br>

   <div class="row">
    <div class="col-md-3">
      <label for="" class="pull-right">Pertemuan</label>
    </div>
    <div class="col-md-9">
      <div class="form-group">
        <input type="text" class="form-control @error('pertemuan') is-invalid @enderror" name="pertemuan" value=" {{isset($modul) ? $modul->pertemuan : old('pertemuan')}}">
        @error('pertemuan')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
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
        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{old('file')}}">
        <small>* Hanya menerima file berformat pdf</small>
        @error('file')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
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
        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" id="editor">{{isset($modul) ? $modul->desc : old('desc')}}</textarea>
        @error('desc')
            <div class="invalid-feedback">
              {{$message}}
            </div>
        @enderror
      </div>
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
      <button type="submit" class="btn btn-primary px-5">Simpan</button>
    </div>
  </div>
  
</form>


{{-- <script src="/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script> --}}
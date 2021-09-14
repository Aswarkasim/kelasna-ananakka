<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow-sm my-4  p-3">
        <div class="card-title">
          <h5><strong>Tambah Kelas</strong></h5>
          <hr>

          <form action="/guru/kelas" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
              <div class="col-3">
                <label for="name" class="float-end">Nama Kelas</label>
              </div>
              <div class="col-8">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($kelas) ? $kelas->name : old('name') }}" name="name" placeholder="Nama Kelas">
                @error('name')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>
            </div>


            <div class="row mt-2">
              <div class="col-3">
                <label for="cover" class="float-end">Cover</label>
              </div>
              <div class="col-8">
                <input type="file" id="cover" class="form-control @error('cover') is-invalid @enderror" value="{{ isset($kelas) ? $kelas->cover : old('cover') }}" name="cover" placeholder="Cover">
                @error('cover')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-3">
                <label for="desc" class="float-end">Deskripsi</label>
              </div>
              <div class="col-8">
                <textarea name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror"   cols="30" rows="10">{{ isset($kelas) ? $kelas->cover : old('desc') }}</textarea>
                @error('desc')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>
            </div>

             <div class="row mt-2">
                <div class="col-3">
                </div>
                <div class="col-8">
                  <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>

            </form>


         

        </div>
      </div>
    </div>
  </div>
</div>
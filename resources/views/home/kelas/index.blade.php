<div class="container my-4">
<div class="row">
  <div class="col-lg-12">
    
    <h3><strong>Kelas Saya</strong></h3>
    <hr>
   

    {{-- <div class="row mt-3">
      <div class="col-lg-3 shadow rounded p-3">
        <img src="/img/thumb_orange.jpg" class="tumbnail" width="100%" alt="">
        <a href="">Kelas I</a>
      </div>
    </div> --}}


   <div class="row">
     <div class="col-lg-3">

       <div class="d-grid gap-2">
           <a href="/guru/kelas/create" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Kelas</a>
      </div>

      <div class="card mt-3 shadow-sm rounded">
        <h5 class="pt-3 text-center"><b>Jumlah Kelas</b></h5>
        <h4 class="text-center">24</h4>
      </div>

       <div class="card mt-3 shadow-sm rounded">
        <h5 class="pt-3 text-center"><b>Jumlah Siswa</b></h5>
        <h4 class="text-center">24</h4>
      </div>

     </div>
     <div class="col-lg-9">
       
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari kelas">
          <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i> Cari</button>
        </div>

        @foreach ($kelas as $row)
            
        <div class="card p-2 flex-row shadow-sm mt-2">
          <img src="{{$row->cover}}" width="200px" alt="">
          <div class="card-body">
            <h4 class="card-title"><a href="" class="text-decoration-none"><strong> {{$row->name}}</strong></a></h4>
            <small>{{$row->created_at->diffForHumans()}}</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, maxime.</p>
            <a href="" class="btn btn-primary">Buka</a>
          </div>
        </div>
        @endforeach

        <div class="row mt-4">
          <div class="col-lg-12 justify-content-center">
            {{$kelas->links()}}
          </div>
        </div>
        
     </div>


   </div>

  </div>
</div>
</div>
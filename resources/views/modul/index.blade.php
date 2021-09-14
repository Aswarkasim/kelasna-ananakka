 @include('sweetalert::alert')
 <a href="/guru/modul/create" class="btn btn-primary mb-1"><i class="fa fa-plus"></i> Tambah Modul</a>
 <table class="table table-striped">
   <tr>
     <th>No</th>
     <th>Modul</th>
     <th>Status</th>
     <th>Aksi</th>
   </tr>

   @foreach ($modul as $row)
       
     <tr>
       <td>{{$loop->iteration}}</td>
       <td><a href="" class="link"><b>{{$row->name}}</b></a></td>
       <td>
      @if ($row->is_active == 0)
      <span class="badge bg-danger rounded-pill">Tidak aktif</span>
      @else
      <span class="badge bg-success rounded-pill">Aktif</span>
      @endif   
      </td>
       <td>
         <div class="btn-group">
           <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
             Pilihan
           </button>
           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           
               <li><a class="dropdown-item" href=" "><i class="fa fa-power-off"></i> Aktifkan</a></li>

               <li><a class="dropdown-item" href=" "><i class="fa fa-power-off"></i> Nonaktifkan</a></li>

             <li><a class="dropdown-item" href="/guru/modul/{{$row->id}}/edit"><i class="fa fa-edit"></i> Edit</a></li>
             <form action="/guru/modul/{{$row->id}}" method="POST">
              @method('delete')
              @csrf
               <li><button type="submit" class="dropdown-item tombol-hapus" ><i class="fa fa-trash"></i> Hapus</button></li>
              </form>
           </ul>
         </div>
       </td>
     </tr>

   @endforeach

 </table>


 <div class="row">
   <div class="col-md-12">
     <div class="text-center">
       This pagination
     </div>
   </div>
 </div>
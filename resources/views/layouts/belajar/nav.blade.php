{{-- 
  <div class="col-md-3">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active"><i class="fa fa-houzz"></i> Paket</a>
      <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-check-circle-o"></i> Hasil</a>
    </div>
  </div> --}}

  <div class="col-md-3">
      <h3><b>Belajar</b></h3>
<hr>

    <div class="list-group shadow-sm">
      <a href="/guru/modul" class="list-group-item list-group-item-action {{Request::is('guru/modul*') ? 'active' : ''}}"><i class="fa fa-book"></i> Modul</a>
      <a href="/guru/diskusi" class="list-group-item list-group-item-action  {{Request::is('guru/diskusi*') ? 'active' : ''}}"><i class="fa fa-group"></i> Diskusi</a>
      <a href="/guru/tugas" class="list-group-item list-group-item-action  {{Request::is('guru/tugas*') ? 'active' : ''}}"><i class="fa fa-hourglass"></i> Tugas</a>
      <a href="/guru/quiz" class="list-group-item list-group-item-action  {{Request::is('guru/quiz*') ? 'active' : ''}}"><i class="fa fa-rocket"></i> Quiz</a>
    </div>
  </div>

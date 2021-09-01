<style>
  .active-header{

  }
</style>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm rounded" aria-label="Eleventh navbar example">
  <div class="container">
    <a class="navbar-brand" href="/">
    <img src="/img/logo.png" width="100px" alt="">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample09" style="">
     

      @if (Request::is('siswa*'))
          
      @elseif(Request::is('guru'))

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/guru/dashboard"><b>Dashboard</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru/modul"><b>Belajar</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru/ujian"><b>Ujian</b></a>
          </li>
        </ul>

      @else

       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/home"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru/modul"><b>Tentang</b></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/guru/modul"><b>Pricing</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru/ujian"><b>Contact</b></a>
          </li>
        </ul>

      @endif

      

        <div class="dropdown text-end">
          @auth
               <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  Aswar Kasim, S.Pd. <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                  <li><a class="dropdown-item" href="/guru/kelas"><i class="fa fa-cogs"></i> Ubah Kelas</a></li>
                  <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i> Sign out</a></li>
                </ul>
          @else
            <a href="/register" class="btn btn-primary"><i class="fa fa-user-plus"></i> Register</a>
            <a href="/login" class="btn btn-orange"><i class="fa fa-sign-in"></i> Login</a>
          @endauth
         
        </div>
    </div>
  </div>
</nav>


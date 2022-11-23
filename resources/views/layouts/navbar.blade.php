<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
       <img  class = "logo" src="http://smkniu.sch.id/media_library/images/4e12b4a60a9eda0ac93a298d49ee1abf.png" alt="" style="width: 40px;">
       <h1 class="logo me-auto" style="margin-left: 20px;"><a href="index.html" style="font-weight: 600; color: rgb(101, 154, 245);">JPC<span style="font-weight: 200; font-size:medium; color:white;"> SMKN IHYA' ULUMUDIN</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar ">
      <ul>
        <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('beranda') }}">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Visi & Misi</a></li>
            <li><a href="#">Organisasi</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Magang <br> BUMN</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('login') }}">Masuk</a></li>
            <li><a href="{{ route('register') }}">Daftar</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{ route('view-lowongan') }}">Lowongan</a></li>
        @auth
        <li class="dropdown"><a href="#"><span>Anggota <br> JPC/Alumni</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        @else
        <li class="dropdown"><a href="#"><span>Anggota <br> JPC/Alumni</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('login') }}">Masuk</a></li>
            <li><a href="{{ route('register') }}">Daftar Anggota</a></li>
          </ul>
        </li>
        @endauth
        <li><a class="nav-link scrollto" href="{{ route('question-login') }}">Tracer <br> Study</a></li>
        <li class="dropdown"><a href=""><span>Perusahaan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Kerjasama Perusahaan</a></li>
            <li><a href="#">Daftar Perusahaan</a></li>
            <li><a href="#">Penilaian Stakeholder</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Firtual Carieer <br> Fair</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Program NFCV</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Kerjasama </span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">MoU</a></li>
            <li><a href="#">Kuisioner</a></li>
          </ul>
        </li>
      </ul>
    
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
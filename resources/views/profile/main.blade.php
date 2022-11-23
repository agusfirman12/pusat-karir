<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile | SMK Negeri Ihya' Ulumudin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="" target="_blank" class="nav-link"><strong>Gabung Telegram Group</strong></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          Logout
        </a>
      </li>
    </ul>
  </nav>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      </div>
    </form>
  </nav>
  <!-- /.navbar -->
  @yield('container')
<!-- /.container-fluid -->
    </section>
    </form>    <script type="text/javascript">
    $(document).ready(function(){
      //alert();
      //console.log($("#idlistprodi").val());
      console.log($("#idlistprodi").val());
      changeProdi($("#idlistprodi").val());
      
    });

    window.onload = function () { 
      var now = "";      ajaxkota(document.getElementById("prop").value, now);
      cekstatus();
    }
    function changeProdi($id){
      console.log($id);
      if($id == "Lainnya"){
        document.getElementById("idprodilainnya").setAttribute("style", "display:block;");
      } else {
        document.getElementById("idprodilainnya").setAttribute("style", "display:none;");
      }
      
    }
    function issNumberKeyipk(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode != 45 && charCode > 31
        && ((charCode != 46 && charCode < 48) || charCode > 57))
         return false;

      return true;
    }
    function issNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode != 45 && charCode > 31
        && (charCode < 48 || charCode > 57))
         return false;

      return true;
    }
    document.getElementsByName("statusorganisasi")[0].onchange = function() {
      let prop = document.getElementsByName("statusorganisasi")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("namaorganisasi")[0].onchange = function() {
      let prop = document.getElementsByName("namaorganisasi")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("takesripeker")[0].onchange = function() {
      let prop = document.getElementsByName("takesripeker")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("tasukripeker")[0].onchange = function() {
      let prop = document.getElementsByName("tasukripeker")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("posisiripeker")[0].onchange = function() {
      let prop = document.getElementsByName("posisiripeker")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("tempatripeker")[0].onchange = function() {
      let prop = document.getElementsByName("tempatripeker")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("jenisbing")[0].onchange = function() {
      let prop = document.getElementsByName("jenisbing")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("scorebing")[0].onchange = function() {
      let prop = document.getElementsByName("scorebing")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("softskill")[0].onchange = function() {
      let prop = document.getElementsByName("softskill")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("hardskill")[0].onchange = function() {
      let prop = document.getElementsByName("hardskill")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("provdom")[0].onchange = function() {
      let prop = document.getElementsByName("provdom")[0];
      if(prop.value == "" || prop.value === undefined){
        ajaxkota(prop.value);
        prop.style.borderColor = "red";
        document.getElementsByName("kota")[0].prop.style.borderColor = "red";
      } else {
         ajaxkota(prop.value);
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("kota")[0].onchange = function() {
      let prop = document.getElementsByName("kota")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("nim")[0].onchange = function() {
      let prop = document.getElementsByName("nim")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("nama")[0].onchange = function() {
      let prop = document.getElementsByName("nama")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    document.getElementsByName("email")[0].onchange = function() {
      let prop = document.getElementsByName("email")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
    };
    function cekstatus(){

      let prop = document.getElementsByName("provdom")[0];
      if(prop.value == "" || prop.value === undefined){
        prop.style.borderColor = "red";
      } else {
        prop.style.borderColor = "green";
      }
      let nim = document.getElementsByName("nim")[0];
      if(nim.value == "" || nim.value === undefined){
        nim.style.borderColor = "red";
      } else {
        nim.style.borderColor = "green";
      }
      let nama = document.getElementsByName("nama")[0];
      if(nama.value == "" || nama.value === undefined){
        nama.style.borderColor = "red";
      } else {
        nama.style.borderColor = "green";
      }
      let email = document.getElementsByName("email")[0];
      if(email.value == "" || email.value === undefined){
        email.style.borderColor = "red";
      } else {
        email.style.borderColor = "green";
      }
      let kota = document.getElementsByName("kota")[0];
      let kotaa = ""
      if(kotaa == "" || kotaa === undefined){
        kota.style.borderColor = "red";
      } else {
        kota.style.borderColor = "green";
      }
      let hardskill = document.getElementsByName("hardskill")[0];
      if(hardskill.value == "" || hardskill.value === undefined){
        hardskill.style.borderColor = "red";
      } else {
        hardskill.style.borderColor = "green";
      }
      let softskill = document.getElementsByName("softskill")[0];
      if(softskill.value == "" || softskill.value === undefined){
        softskill.style.borderColor = "red";
      } else {
        softskill.style.borderColor = "green";
      }
      let scorebing = document.getElementsByName("scorebing")[0];
      if(scorebing.value == "" || scorebing.value === undefined){
        scorebing.style.borderColor = "red";
      } else {
        scorebing.style.borderColor = "green";
      }
      let jenisbing = document.getElementsByName("jenisbing")[0];
      if(jenisbing.value == "" || jenisbing.value === undefined){
        jenisbing.style.borderColor = "red";
      } else {
        jenisbing.style.borderColor = "green";
      }
      let takesripeker = document.getElementsByName("takesripeker")[0];
      if(nim.value == "" || takesripeker.value === undefined){
        takesripeker.style.borderColor = "red";
      } else {
        takesripeker.style.borderColor = "green";
      }
      let tasukripeker = document.getElementsByName("tasukripeker")[0];
      if(tasukripeker.value == "" || tasukripeker.value === undefined){
        tasukripeker.style.borderColor = "red";
      } else {
        tasukripeker.style.borderColor = "green";
      }
      let tempatripeker = document.getElementsByName("tempatripeker")[0];
      if(tempatripeker.value == "" || tempatripeker.value === undefined){
        nim.style.borderColor = "red";
      } else {
        tempatripeker.style.borderColor = "green";
      }
      let posisiripeker = document.getElementsByName("posisiripeker")[0];
      if(posisiripeker.value == "" || posisiripeker.value === undefined){
        posisiripeker.style.borderColor = "red";
      } else {
        posisiripeker.style.borderColor = "green";
      }
       let namaorganisasi = document.getElementsByName("namaorganisasi")[0];
      if(namaorganisasi.value == "" || namaorganisasi.value === undefined){
        namaorganisasi.style.borderColor = "red";
      } else {
        namaorganisasi.style.borderColor = "green";
      }
       let statusorganisasi = document.getElementsByName("statusorganisasi")[0];
      if(statusorganisasi.value == "" || statusorganisasi.value === undefined){
        statusorganisasi.style.borderColor = "red";
      } else {
        statusorganisasi.style.borderColor = "green";
      }
    }
    </script>    <!-- /.content -->
  </div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Anggota Pusat Karir</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profile') }}" class="d-block">User</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('profile') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Identitas</p>
                </a>
               </li>
               <li class="nav-item">
                <a href="{{ route('gantiPassword') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ganti Password</p>
                </a>
               </li>
               <li class="nav-item">
                <a href="{{ route('dataPendidikan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pendidikan</p>
                </a>
               </li>
               <li class="nav-item">
                <a href="{{ route('dataPendukung') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pendukung Lainnya</p>
                </a>
               </li>
               <li class="nav-item">
                <a href="{{ route('view-lowongan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cari Agenda Kerja</p>
                </a>
               </li>
               <li class="nav-item">
                <a href="{{ route('view-lowongan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cari Lowongan Kerja</p>
                </a>
               </li>
               <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Lowongan<i class="right fas fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="lowonganpending.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lowongan Pending</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lowonganditerima.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lowongan Diterima</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lowonganditolak.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lowongan Ditolak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="downloadcv.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Download CV (PDF)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tracerstudy.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tracer Study</p>
                            </a>
                        </li>
                        </ul>
              </li>
            </nav>
        </div>

               
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

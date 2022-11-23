@extends('profile.main')

@section('container')
<div class="content-wrapper" style="min-height: 487px;">
    <!-- Content Header (Page header) -->
      <div class="widget">
           <div class="alert alert-warning">
              <strong>SELEMAT DATANG DI APLIKASI SMK NEGERI IHYA' ULUMUDIN</strong>
                            <br>
              <strong> 1. PERHATIAN!</strong> Mohon melengkapi data <strong>identitas</strong>, <strong>foto profile</strong> dan <strong>foto ktp</strong> anda terlebih dahulu.
                                            <br>
                <strong> 2. PERHATIAN!</strong> Mohon melengkapi data <strong>Riwayat Pendidikan</strong>, anda terlebih dahulu. <a href="{{ route('dataPendidikan') }}">Disini</a>
                          </div>
        </div>
                   
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ganti Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="https://jpc.poliwangi.ac.id/Beranda">Home</a></li>
              <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
  <!-- /.row -->
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Perbarui Kata Sandi Anda</h3>
        </div>
        <div class="card-body">
            <form action="https://jpc.poliwangi.ac.id/Profile/gantipasswordproses" method="post" accept-charset="utf-8">
            <div class="form-group">
           <label><strong>Password Lama : </strong></label>
           <input type="password" name="pass" value="" required="1" autofocus="1" class="form-control">
            </div>
           <div class="form-group">
            <label><strong>Password Baru: </strong></label>
            <input type="password" name="passs" value="" required="1" class="form-control">
          </div>
           <div class="form-group">
           <label><strong>Ulangi Password Baru : </strong></label>
           <input type="password" name="passss" value="" required="1" class="form-control">
            </div>
           <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
           
           </form>            </div>
      </div>
    </div>
   </div>
  </div>
</section>
    <!-- /.content -->
  </div>
@endsection
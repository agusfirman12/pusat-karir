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
            <h1>Identitas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="https://jpc.poliwangi.ac.id/Beranda">Home</a></li>
                <li class="breadcrumb-item active">Identitas </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<form action="https://jpc.poliwangi.ac.id/Profile/prosesIdentitas/" method="post" accept-charset="utf-8">
<section class="content">
        <!-- /.row -->
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Personal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                  <div class="form-group">
                    <label><strong>Nomor Siswa / NIK : </strong></label>
                    <input type="text" name="nim" value="" class="form-control" required="1" autofocus="1" onkeypress=" return isNumberKey(event)" style="border-color: green;">
                  </div>
                  <div class="form-group">
                      <label><strong>Nama: </strong></label>
                      <input type="text" name="nama" value="" class="form-control" required="1" style="border-color: green;">
                  </div>
                  <div class="form-group">
                      <label><strong>Jenis Kelamin: </strong></label>
                      <select name="jk" class="form-control">
<option value="l" selected="selected">Laki - Laki</option>
<option value="p">Perempuan</option>
</select>
                  </div>
                  <div class="form-group">
                      <label><strong>Alamat Email : </strong></label>
                      <input type="email" name="email" value="" class="form-control" required="1" readonly="1" style="border-color: green;">
                  </div>
                  <div class="form-group">
                   <label><strong>Nomor Telephone : </strong></label>
                   <input type="text" name="telp" value="" class="form-control" required="1" onkeypress=" return isNumberKey(event)">
                    </div>
                   <div class="form-group">
                   <label><strong>Tanggal Lahir : </strong></label>
                   <input type="text" name="tgl" value="" class="form-control datepicker" required="1">
                    </div>
                    <div class="form-group">
                   <label><strong>Tempat Lahir : </strong></label>
                   <input type="text" name="temlahir" value="" class="form-control" placeholder="contoh: Kota Banyuwangi / Kabupaten Banyuwangi" required="1">
                    </div>
                   <div class="form-group">
                   <label><strong>Berat Badan (Kg) : </strong></label>
                   <input type="text" name="berat" value="" class="form-control" required="1" onkeypress="return isNumberKey(event)">
                    </div>
                   <div class="form-group">
                   <label><strong>Tinggi Badan : </strong></label>
                   <input type="text" name="tinggi" value="" class="form-control" required="1" onkeypress="return isNumberKey(event)">
                    </div>
                    <div class="form-group">
                   <label><strong>Provinsi Domisili : </strong></label>
                      <select name="provdom" id="prop" onchange="" class="form-control" style="border-color: green;">
                        <option value="" selected="">Pilih Provinsi</option>
                                                    <option value="11">
                              Aceh                            </option>
                                                      <option value="12">
                              Sumatera Utara                            </option>
                                                      <option value="13">
                              Sumatera Barat                            </option>
                                                      <option value="14">
                              Riau                            </option>
                                                      <option value="15">
                              Jambi                            </option>
                                                      <option value="16">
                              Sumatera Selatan                            </option>
                                                      <option value="17">
                              Bengkulu                            </option>
                                                      <option value="18">
                              Lampung                            </option>
                                                      <option value="19">
                              Kepulauan Bangka Belitung                            </option>
                                                      <option value="21">
                              Kepulauan Riau                            </option>
                                                      <option value="31">
                              DKI Jakarta                            </option>
                                                      <option value="32">
                              Jawa Barat                            </option>
                                                      <option value="33">
                              Jawa Tengah                            </option>
                                                      <option value="34">
                              DI Yogyakarta                            </option>
                                                      <option value="35">
                              Jawa Timur                            </option>
                                                      <option value="36">
                              Banten                            </option>
                                                      <option value="51">
                              Bali                            </option>
                                                      <option value="52">
                              Nusa Tenggara Barat                            </option>
                                                      <option value="53">
                              Nusa Tenggara Timur                            </option>
                                                      <option value="61">
                              Kalimantan Barat                            </option>
                                                      <option value="62">
                              Kalimantan Tengah                            </option>
                                                      <option value="63">
                              Kalimantan Selatan                            </option>
                                                      <option value="64">
                              Kalimantan Timur                            </option>
                                                      <option value="65">
                              Kalimantan Utara                            </option>
                                                      <option value="71">
                              Sulawesi Utara                            </option>
                                                      <option value="72">
                              Sulawesi Tengah                            </option>
                                                      <option value="73">
                              Sulawesi Selatan                            </option>
                                                      <option value="74">
                              Sulawesi Tenggara                            </option>
                                                      <option value="75">
                              Gorontalo                            </option>
                                                      <option value="76">
                              Sulawesi Barat                            </option>
                                                      <option value="81">
                              Maluku                            </option>
                                                      <option value="82">
                              Maluku Utara                            </option>
                                                      <option value="91">
                              Papua Barat                            </option>
                                                      <option value="92">
                              Papua                            </option>
                                                  ?&gt;
                      </select>
                  </div>
                   <div class="form-group">
                   <label><strong>Kota / Kabupaten Domisili: </strong></label>
                   
                    <input type="text" name="kota" value="" class="form-control" placeholder="Kota Malang / Kab Malang" style="border-color: green;">
                    </div>
                    <div class="form-group">
                   <label><strong>Alamat : </strong></label>
                   <input type="text" name="alamat" value="" class="form-control" required="1">
                    </div>
                   <div class="form-group">
                    <label><strong>Pendidikan Terakhir: </strong></label>
                   <select name="penter" class="form-control">
<option value="D3">D3</option>
<option value="D4">D4</option>
<option value="S1">S1</option>
<option value="SMK">SMK</option>
</select>
                    </div>
                   <div class="form-group">
                    <label><strong>Program Studi: </strong></label>
                   <select name="prodi" class="form-control" onclick="return changeProdi(this.value)" id="idlistprodi">
                     <option value="Teknik Mesin">Teknik Mesin</option>
                     <option value="Teknik Sipil">Teknik Sipil</option>
                     <option value="Teknik Informatika">Teknik Informatika</option>
                     <option value="Teknik Manufaktur Kapal">Teknik Manufaktur Kapal</option>
                     <option value="Agribisnis">Agribisnis</option>
                     <option value="Manajemen Bisnis Pariwisata">Manajemen Bisnis Pariwisata</option>
                     <option value="Teknologi Pengolahan Hasil Ternak">Teknologi Pengolahan Hasil Ternak</option>
                     <option value="Lainnya" selected="">Lainnya</option>
                   </select>
                   <br>
                      <input type="text" name="prodilainnya" class="form-control" style="display:block;" id="idprodilainnya" placeholder="Ketikan Program Studi Anda" value="">
                    </div>
                    <div class="form-group">
                     <label><strong>IPK : </strong></label>
                     <input type="text" name="ipk" value="" class="form-control" required="1" onkeypress="return issNumberKeyipk(event)" placeholder="ex: 3.45">
                    </div>
                   <div class="form-group">
                   <label><strong>Jurusan : </strong></label>
                   <input type="text" name="jur" value="" class="form-control" required="1">
                    </div>
                   <div class="form-group">
                   <label><strong>Kampus : </strong></label>
                   <input type="text" name="kam" value="" class="form-control" required="1">
                  </div>
                  
                   
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                Kemampuan
              </div>
              <div class="card-body">
                <div class="form-group">
                   <label><strong>Hard Skill : </strong></label>
                   <textarea required="true" name="hardskill" class="form-control" style="border-color: red;"></textarea>
                </div>
                 <div class="form-group">
                   <label><strong>Soft Skill : </strong></label>
                   <textarea required="true" name="softskill" class="form-control" style="border-color: red;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                 <div class="card">
                   <div class="card-header">
                      <h3 class="card-title">Foto Profile</h3>
                    </div>
                    <div class="card-body">
                                              <span style="color: red;"><i>Anda belum upload  foto profile</i></span>
                                            <a href="https://jpc.poliwangi.ac.id/Profile/uploadProfile" class="btn btn-info">Upload Foto Profile</a>
                    </div>
                </div>
              </div>
              <div class="col-lg-12">
                 <div class="card">
                   <div class="card-header">
                      <h3 class="card-title">KTP</h3>
                    </div>
                    <div class="card-body">
                                                <span style="color: red;"><i>Anda belum upload  foto Ktp</i></span>
                                                <a href="https://jpc.poliwangi.ac.id/Profile/uploadKtp" class="btn btn-info">Upload Foto KTP</a>
                    </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Kemampuan Bahasa Inggris</h3>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                        <label><strong>Score : </strong></label>
                        <input type="text" name="scorebing" required="true" class="form-control" value="" onkeypress="return issNumberKey(event);" placeholder="Ex:4.00" style="border-color: green;">
                      </div>
                       <div class="form-group">
                        <label><strong>Jenis : </strong></label>
                        <select name="jenisbing" required="true" class="form-control" style="border-color: green;">
                          <option value="TOEFL">TOEFL</option>
                          <option value="IELTS">IELTS</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Riwayat Pekerjaan Terakhir</h3>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                        <label><strong>Tempat : </strong></label>
                        <input type="text" name="tempatripeker" class="form-control" value="" style="border-color: green;">
                      </div>
                       <div class="form-group">
                        <label><strong>Posisi : </strong></label>
                        <input type="text" name="posisiripeker" class="form-control" value="" style="border-color: green;">
                      </div>
                      <div class="form-group">
                        <label><strong>Tahun Masuk : </strong></label>
                        <select name="tasukripeker" class="form-control" style="border-color: green;">
                          <option value="-" selected="">Tidak Ada</option>
                                                                              <option value="2022">2022</option>
                                                  <option value="2021">2021</option>
                                                  <option value="2020">2020</option>
                                                  <option value="2019">2019</option>
                                                  <option value="2018">2018</option>
                                                  <option value="2017">2017</option>
                                                  <option value="2016">2016</option>
                                                  <option value="2015">2015</option>
                                                  <option value="2014">2014</option>
                                                  <option value="2013">2013</option>
                                                  <option value="2012">2012</option>
                                                  <option value="2011">2011</option>
                                                  <option value="2010">2010</option>
                                                  <option value="2009">2009</option>
                                                  <option value="2008">2008</option>
                                                  <option value="2007">2007</option>
                                                </select>
                      </div>
                      <div class="form-group">
                        <label><strong>Tahun Keluar : </strong></label>
                        <select name="takesripeker" class="form-control" style="border-color: green;">
                         <option value="-" selected="">Tidak Ada</option>
                                                                              <option value="2022">2022</option>
                                                  <option value="2021">2021</option>
                                                  <option value="2020">2020</option>
                                                  <option value="2019">2019</option>
                                                  <option value="2018">2018</option>
                                                  <option value="2017">2017</option>
                                                  <option value="2016">2016</option>
                                                  <option value="2015">2015</option>
                                                  <option value="2014">2014</option>
                                                  <option value="2013">2013</option>
                                                  <option value="2012">2012</option>
                                                  <option value="2011">2011</option>
                                                  <option value="2010">2010</option>
                                                  <option value="2009">2009</option>
                                                  <option value="2008">2008</option>
                                                  <option value="2007">2007</option>
                                                </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Riwayat Organisasi Terakhir</h3>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                        <label><strong>Nama Organisasi : </strong></label>
                        <input type="text" name="namaorganisasi" class="form-control" value="" style="border-color: green;">
                      </div>
                       <div class="form-group">
                        <label><strong>Status Organisasi : </strong></label>
                        <select name="statusorganisasi" class="form-control" style="border-color: green;">
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif" selected="">Tidak Aktif</option>
                        </select>
                      </div>
                      <input type="submit" name="submit" value="Update Data" class="btn btn-primary">
  
                  </div>
                </div>
              </div>

              
            </div>
           
          </div>
        </div>
        <!-- /.row -->
      </div>
@endsection
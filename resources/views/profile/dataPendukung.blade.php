@extends('profile.main')

@section('container')
<div class="content-wrapper" style="min-height: 525.188px;">
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
            <h1>Data Pendukung Lainnnya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="https://jpc.poliwangi.ac.id/Beranda">Home</a></li>
              <li class="breadcrumb-item active">Data Pendukung Lainnnya</li>
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
          <h3>Data sertifikasi kejuaraan, sertifikasi keahlian, sertifikasi organisasi</h3>
        </div>
        <div class="card-body">
          <a href="https://jpc.poliwangi.ac.id/Profile/inputdataPendukung" class="btn btn-info">Tambah Data Pendukung</a><br><br>
          <div class="table-responsive">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
              <thead>
               <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 67.8438px;">No</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jenis Data Pendukung: activate to sort column ascending" style="width: 355.948px;">Jenis Data Pendukung</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Deskripisi: activate to sort column ascending" style="width: 174.625px;">Deskripisi</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="File: activate to sort column ascending" style="width: 80.802px;">File</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 26.6979px;"></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 26.6979px;"></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 26.7188px;"></th></tr>
              </thead>
               <tbody>
                           <tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>    <!-- /.content -->
  </div>
@endsection
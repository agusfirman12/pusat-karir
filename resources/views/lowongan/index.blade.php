@extends('layouts.main')

@section('container')
<div class="header-section text-white align-items-center d-flex justify-content-center pt-5" style="height: 250px; background-color:#154286">
    <h1>Lowongan Kerja</h1>
</div>
<div class="bg-warning" style="height: 10px"></div>
<div class="container mt-3">
    <div class="row">
        <div class="col-3 me-5">
            <div class="search-section shadow p-3">
                <h5>Pencarian</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Judul Lowongan">
                    <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
                  </div>
            </div>
        </div>
        <div class="col">
            <div class="row pt-2 shadow d-flex align-items-center rounded">
                <p class="fst-italic "><a href="{{ route("beranda") }}" class="text-decoration-none text-dark"><i class="bi bi-house-fill me-2"></i></a> / <a href="{{ route('view-lowongan') }}" class="text-decoration-none text-dark">Lowongan</a></p>
            </div>
            @forelse ($lowongan as $loker)
            <a href="/lowongan/detile/{{$loker->id}}" class="text-decoration-none">
                <div class="row p-3 text-dark">
                    <div class="col d-flex justify-content-center">
                        <h5 class="bg-light p-2">{{ $loker->perusahaan->nama_perusahaan }}</h5>
                    </div>
                    <span class="bg-danger" style="width: 100%; height: 5px; z-index:-1;margin-top:-30px"></span>
                </div>
                <div class="row shadow p-3 rounded text-dark">
                    <div class="col-5">
                        <img src="https://cdn.pixabay.com/photo/2017/08/30/11/45/building-2696768_960_720.png" width="200px">
                    </div>
                    <div class="col">
                        <h5>{{ $loker->judul_lowongan }}</h5>
                        <div class="bg-warning p-3 my-3 rounded">
                            <p><i class="bi bi-briefcase-fill me-2"></i>Posisi : {{ $loker->posisi }}</p>
                        </div>
                        <div class="bg-danger p-3 my-3 text-white rounded">
                            <p><i class="bi bi-calendar3 me-2"></i>Deadline : {{ $loker->deadline }}</p>
                            <p><i class="bi bi-person-fill me-2"></i>Total Pelamar :</p>
                        </div>
                    </div>
                </div>
            </a>                
            @empty
            <div class="d-flex justify-content-center mt-4 shadow p-5">
                <h3 class="text-black-50">Lowongan Tidak Tersedia</h3>
            </div>
            @endforelse 

        </div>
    </div>
</div>
@endsection
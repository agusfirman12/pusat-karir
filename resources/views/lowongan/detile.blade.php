@extends('layouts.main')

@section('container')
<div class="header-section text-white align-items-center d-flex justify-content-center pt-5" style="height: 250px; background-color:#154286">
    <h1>{{ $lowongan->judul_lowongan }}</h1>
</div>
<div class="bg-warning" style="height: 10px"></div>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="row pt-2 shadow d-flex align-items-center rounded">
                <p class="fst-italic "><a href="{{ route("beranda") }}" class="text-decoration-none text-dark"><i class="bi bi-house-fill me-2"></i></a> / <a href="{{ route('view-lowongan') }}" class="text-decoration-none text-dark">Lowongan</a></p>
            </div>
            <div class="row shadow p-3 rounded text-dark mt-3">
                <div class="title">
                    <h1>{{ $lowongan->posisi }}</h1>
                    <div class="col">
                        <p>perusahaan : {{ $lowongan->perusahaan->nama_perusahaan }}</p>
                    </div>
                </div>
            </div>
            <div class="row bg-danger rounded">
                <div class="d-flex align-items-center">
                    <p>Deadline : {{ $lowongan->deadline }}</p>
                </div>
                <div class="info d-flex align-items-center">
                    <p><i class="bi bi-calendar3 me-2"></i>Deadline : {{ $lowongan->deadline }}</p>
                    <p><i class="bi bi-person-fill me-2"></i>Total Pelamar :</p>
                </div>
            </div>
        </div>
        <div class="col-3 ms-5">
            <div class="search-section shadow p-3  rounded">
                <h5>Pencarian</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Judul Lowongan">
                    <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
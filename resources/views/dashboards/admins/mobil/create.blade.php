@extends('dashboards.admins.layouts.admin-dash-layout')
@section('meta-csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Tambah Mobil Jenazah | SIPADU')

@section('content')
    {{-- Page Title Start --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <a href="admin/mobil" class="btn btn-primary ms-1"><i class="mdi mdi-arrow-left"></i> Back</a>
                    </form>
                </div>
                <h4 class="page-title">Data Perizinan</h4>
            </div>
        </div>
    </div>
    {{-- Page Title End --}}

    {{-- Row Start --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- Card Body Start --}}
                <div class="card-body">
                    <form action="admin/mobil" method="POST" autocomplete="off">
                        @csrf
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="bx bxs-map me-1"></i> Info Mobil Jenazah</h5>
                        {{-- Nama & Tanggal Berdiri --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nomor" class="form-label">Nomor mobil</label>
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror"
                                        name="nomor" id="nomor" placeholder="Masukkan Nama mobil"
                                        value="{{ old('nomor') }}" required autofocus>
                                    @error('nomor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 position-relative" id="datepicker2">
                                    {{-- input kontak  --}}
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="kontak" class="form-label">Kontak</label>
                                            <input type="text" class="form-control @error('kontak') is-invalid @enderror"
                                                name="kontak" id="kontak" placeholder="Masukkan kontak mobil"
                                                value="{{ old('kontak') }}" required autofocus>
                                            @error('kontak')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Telp Perusahaan & Email End --}}

                            <div class="text-end">
                                <button type="submit" class="btn btn-success mt-2"><i
                                        class="mdi mdi-view-grid-plus me-1"></i>
                                    Tambah Mobil Jenazah</button>
                            </div>
                    </form>
                    {{-- Tab Content End --}}
                </div>
                {{-- Card Body End --}}
            </div>
        </div>
    </div>
    {{-- Row End --}}
@endsection

@section('javascript')
    {{-- javascript text area --}}

@endsection

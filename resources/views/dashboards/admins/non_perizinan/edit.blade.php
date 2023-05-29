@extends('dashboards.admins.layouts.admin-dash-layout')
@section('meta-csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Edit Non Perizinan | SIPADU')

@section('content')
    {{-- Page Title Start --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <a href="admin/nonperizinan" class="btn btn-primary ms-1"><i class="mdi mdi-arrow-left"></i> Back</a>
                    </form>
                </div>
                <h4 class="page-title">Data Non Perizinan</h4>
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
                    <form action="admin/perizinan/{{ $perizinan->id }}" method="POST" autocomplete="off">
                        @method('put')
                        @csrf
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="bx bxs-map me-1"></i> Info Non Perizinan</h5>
                        {{-- Nama & Tanggal Berdiri --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_perizinan" class="form-label">Nama Non Perizinan</label>
                                    <input type="text" class="form-control @error('nama_perizinan') is-invalid @enderror"
                                        name="nama_perizinan" id="nama_perizinan" placeholder="Masukkan nama Non Perizinan"
                                        value="{{ old('nama_perizinan', $perizinan->nama_perizinan) }}" required>
                                    @error('nama_perizinan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 position-relative" id="datepicker2">
                                    <label for="tanggal_berdiri" class="form-label">Persyaratan</label>
                                    {{-- text area  --}}
                                    <textarea class="form-control @error('persyaratan') is-invalid @enderror" name="persyaratan" id="persyaratan"
                                        rows="3" placeholder="Masukkan persyaratan" required>{{ old('persyaratan', $perizinan->persyaratan) }}</textarea>

                                </div>
                            </div>
                        </div>

                        {{-- Telp Non Perizinan & Email End --}}

                        <div class="text-end">
                            <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save me-1"></i>
                                Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
                {{-- Card Body End --}}
            </div>
        </div>
    </div>
    {{-- Row End --}}
@endsection

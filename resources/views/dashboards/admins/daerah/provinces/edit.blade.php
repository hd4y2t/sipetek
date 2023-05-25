@extends('dashboards.admins.layouts.admin-dash-layout')
@section('meta-csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Edit Provinsi | SI Pengaduan Tenaga Kerja')

@section('content')
{{-- Page Title Start --}}
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <a href="admin/provinces" class="btn btn-primary ms-1"><i class="mdi mdi-arrow-left"></i> Back</a>
                </form>
            </div>
            <h4 class="page-title">Data Perusahaan</h4>
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
                <h4 class="header-title">Form Edit Provinsi</h4>
                <p class="text-muted font-14 mb-3">Lorem, ipsum dolor sit amet <code>&lt;consectetur&gt;</code> adipisicing elit. Voluptate, accusamus!</p>
                <form action="admin/provinces/{{ $province->slug }}" method="POST" autocomplete="off">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="id" class="form-label">ID Provinsi</label>
                                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id" placeholder="Masukkan id provinsi" value="{{ old('id', $province->id) }}" required autofocus>
                                @error('id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Provinsi</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan nama provinsi" value="{{ old('name', $province->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" style="opacity: 0; height: 1px; display: none" placeholder="Masukkan slug" value="{{ old('slug', $province->slug) }}" required/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="text-end">
                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save me-1"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            {{-- Card Body End --}}
        </div>
    </div>
</div>
{{-- Row End --}}
@endsection

@section('javascript')
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('admin/provinces/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection
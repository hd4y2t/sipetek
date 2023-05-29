@extends('layouts.app')
@section('title', 'Beranda | SIPADU')

@section('content')
    <!-- Hero Start -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <div>
                            <span class="badge bg-danger rounded-pill">New</span>
                            <span class="text-white-50 ms-1">Welcome to SIPADU</span>
                        </div>
                        <h2 class="text-white fw-normal mb-4 mt-3 hero-title">SIPADU SU 1 PALEMBANG</h2>

                        <p class="mb-4 font-16 text-white-50">Sistem Informasi Pelayanan Administrasi Terpadu Kecamatan
                            Seberang Ulu Satu Kota Palembang</p>

                        <a href="{{ route('register') }}" class="btn btn-success">Daftar ! Untuk Pengaduan<i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="text-md-end mt-3 mt-md-0">
                        <img src="assets/images/startup.svg" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->
    <section class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="mdi mdi-database-check text-primary" style="font-size: 24px"></i>
                            <h3><span>{{ $pengaduan }}</span></h3>
                            <p class="text-muted font-15 mb-0">Total Pengaduan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="mdi mdi-clipboard-alert-outline text-danger" style="font-size: 24px"></i>
                            <h3><span>{{ $pending }}</span></h3>
                            <p class="text-muted font-15 mb-0">Menunggu Konfirmasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="mdi mdi-progress-check text-warning" style="font-size: 24px"></i>
                            <h3><span>{{ $proses }}</span></h3>
                            <p class="text-muted font-15 mb-0">Sedang di Proses</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="mdi mdi-check-decagram text-success" style="font-size: 24px"></i>
                            <h3><span>{{ $selesai }}</span></h3>
                            <p class="text-muted font-15 mb-0">Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Content End -->

            <div class="row">
                <div class="col-lg col-xl">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="mdi mdi-account-group text-primary" style="font-size: 24px"></i>
                            <h3><span>{{ $user }}</span></h3>
                            <p class="text-muted font-15 mb-0">Total Pengadu</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- What We Do Start -->
    <section class="procedure py-5 bg-light-lighten border-top border-bottom border-light" id="#perizinan">

        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-chat"></i></h1>
                        <h3>Daftar <span class="text-primary">Perizinan</span></h3>
                        <p class="text-muted mt-2">Berikut Daftar Perizinan Yang dapat diajukan</p>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                @foreach ($perizinan as $item)
                    <div class="col-lg-4">
                        <div class="text-center icon-box p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="bx bx-message-add text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">{{ $item->nama_perizinan }}</h4>
                            <p class="text-muted mt-2 mb-0">{{ $item->persyaratan }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- What We Do End -->

    <!-- Procedure Start -->
    <section class="what-we-do py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-message"></i></h1>
                        <h3>Daftar <span class="text-primary">Non Perizinan</span></h3>
                        <p class="text-muted mt-2">Berikut daftar Non Perizinan yang dapat diajukan</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 pt-4">
                @foreach ($non_perizinan as $item)
                    <div class="col-lg-4">
                        <div class="icon-box p-3 bg-light-lighten border-top border-bottom border-light">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="bx bx-message-dots text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">{{ $item->nama_perizinan }}</h4>
                            <p class="text-muted mt-2 mb-0">{{ $item->persyaratan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Procedure End -->
    <section class="procedure py-5 bg-light-lighten border-top border-bottom border-light" id="#perizinan">

        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-car"></i></h1>
                        <h3>Daftar <span class="text-primary">Mobil Jenazah</span></h3>
                        <p class="text-muted mt-2">Berikut Daftar Mobil Jenazah Yang dapat dipakai</p>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                @foreach ($mobil as $item)
                    <div class="col-lg-4">
                        <div class="text-center icon-box p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="bx bx-car text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">{{ $item->nomor . ' - ' . $item->kontak }}</h4>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection

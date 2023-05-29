@extends('dashboards.admins.layouts.admin-dash-layout')
@section('meta-csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title', 'Detail Perizinan | SIPADU')

@section('content')
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <a href="admin/perizinan" class="btn btn-primary ms-1"><i class="mdi mdi-arrow-left"></i> Back</a>
                    </form>
                </div>
                <h4 class="page-title">Data Perizinan</h4>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    <!-- Row Start -->
    <div class="row">
        <div class="col-sm-12">
            <!-- Card Start -->
            <div class="card bg-primary">
                <!-- Card Body Start -->
                <div class="card-body profile-user-box">
                    <!-- Row Start -->
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="{{ asset('assets/images/no-image.svg') }}" alt=""
                                            class="rounded-circle img-thumbnail" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <h4 class="mt-1 mb-1 text-white">{{ $perizinan->nama_perizinan }}</h4>
                                        <p class="font-13 text-white-50">{{ $perizinan->persyaratan }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                <a href="admin/perizinan/{{ $perizinan->id }}/edit" type="button" class="btn btn-light"><i
                                        class="mdi mdi-pencil me-1"></i> Edit</a>
                                <form action="admin/perizinan/{{ $perizinan->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i
                                            class='mdi mdi-delete me-1'></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Card Body End -->
            </div>
            <!-- Card End -->
        </div>
    </div>
    <!-- Row End -->

@endsection

        <div class="leftside-menu">
            {{-- Logo Start --}}
            <a href="{{ \URL::to('/dashboard') }}" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('img/logo-baru.png') }}" alt="" height="50" />
                    {{-- <label for="" ></label>SIPADU</label> --}}
                    {{-- label text color white --}}
                    <label for="" style="color: white">SIPADU</label>
                </span>

                {{-- <link rel="icon" href="{{ asset('img/logo-baru.png') }}" type="image/x-icon" /> --}}
                <span class="logo-sm">
                    <img src="{{ asset('img/logo-baru.png') }}" alt="" height="50" />
                    <label for="" style="color: white">SIPADU</label>
                </span>
            </a>
            {{-- Logo End --}}
            {{-- Side Menu Start --}}
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <ul class="side-nav">
                    <li class="side-nav-title side-nav-item">Navigation</li>
                    <li class="side-nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                            <i class="mdi mdi-tune-vertical"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    @if (Auth()->user()->role == 1)
                        <li class="side-nav-title side-nav-item">Data Master</li>
                        <li class="side-nav-item">
                            <a href="{{ url('admin/pengadu') }}" class="side-nav-link">
                                <i class="bx bx-group"></i>
                                <span> Data Pengadu </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ url('admin/pengaduans') }}" class="side-nav-link">
                                <i class="mdi mdi-bullhorn-outline"></i>
                                <span> Data Pengaduan </span>
                            </a>
                        </li>

                        {{-- <li class="side-nav-item">
                            <a href="{{ url('admin/perusahaans') }}" class="side-nav-link">
                                <i class="bx bx-buildings"></i>
                                <span> Data Perusahaan </span>
                            </a>
                        </li> --}}
                        <li class="side-nav-item">
                            <a href="{{ url('admin/perizinan') }}" class="side-nav-link">
                                <i class="bx bx-category"></i>
                                <span>Perizinan </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ url('admin/non_perizinan') }}" class="side-nav-link">
                                <i class="bx bx-message"></i>
                                <span>Non Perizinan </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ url('admin/mobil') }}" class="side-nav-link">
                                <i class="bx bx-car"></i>
                                <span>Mobil Jenazah </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ url('admin/perihals') }}" class="side-nav-link">
                                <i class="bx bx-category"></i>
                                <span> Data Perihal Pengaduan </span>
                            </a>
                        </li>

                        {{-- <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#masterDaerah" aria-expanded="false"
                                aria-controls="masterDaerah" class="side-nav-link">
                                <i class="bx bx-map-pin"></i>
                                <span> Master Informasi </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="masterDaerah">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ url('admin/provinces') }}">Data Provinsi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/regencies') }}">Data Kabupaten</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/districts') }}">Data Kecamatan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/villages') }}">Data Kelurahan</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    @endif

                    <li class="side-nav-title side-nav-item">Laporan Pengaduan</li>
                    <li class="side-nav-item">
                        <a href="{{ url('admin/laporans') }}" class="side-nav-link">
                            <i class="bx bx-file"></i>
                            <span> Laporan </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Profile</li>
                    <li class="side-nav-item">
                        <a href="{{ route('admin.profile') }}" class="side-nav-link">
                            <i class="bx bx-user"></i>
                            <span> My Account </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="bx bx-log-out"></i>
                            <span> Logout </span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- Side Menu End --}}
        </div>

<!-- Start Vertical Layout Sidebar -->
<aside class="left-sidebar">
    <div>
        <!-- Brand Logo -->
        <div class="brand-logo d-flex align-items-center justify-content-between py-3 px-4">
            <a href="{{ route('dashboard') }}" class="logo-img text-decoration-none d-flex align-items-center">
                <img src="{{ URL::asset('build/images/logos/logopengembang.png') }}" alt="Logo" class="dark-logo me-2" />
                <span class="fw-bold fs-5">SIP-Kes</span>
            </a>
            <a href="#" class="sidebartoggler text-decoration-none fs-5 ms-auto d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav" class="list-unstyled">

                <!-- Dashboard -->
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-speedometer2 me-2"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Pendaftaran Pasien -->
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('pendaftaran*') ? 'active' : '' }}"
                       href="{{ route('pendaftaran.create') }}" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-person-add me-2"></i>
                        </span>
                        <span>Pendaftaran</span>
                    </a>
                </li>

                <!-- Riwayat Pasien -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/riwayat" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-journal-medical me-2"></i>
                        </span>
                        <span>Riwayat Pasien</span>
                    </a>
                </li>

                <!-- Farmasi & Pembayaran -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ request()->is('farmasi*') || request()->is('pembayaran*') ? 'active' : '' }}"
                       href="#" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-capsule-pill me-2"></i>
                        </span>
                        <span>Farmasi & Pembayaran</span>
                    </a>
                    <ul class="first-level collapse {{ request()->is('farmasi*') || request()->is('pembayaran*') ? 'show' : '' }}"
                        aria-expanded="false">
                        <!-- Resep Obat -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('farmasi/resep') ? 'active' : '' }}"
                               href="{{ route('farmasi.resep') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Resep Obat</span>
                            </a>
                        </li>

                        <!-- Pembayaran -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('pembayaran') ? 'active' : '' }}"
                               href="{{ route('pembayaran.index') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Bayar Sekarang</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Poli Umum -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ request()->is('poliumum*') ? 'active' : '' }}"
                       href="#" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-briefcase me-2"></i>
                        </span>
                        <span>Poli Umum</span>
                    </a>
                    <ul class="first-level collapse {{ request()->is('poliumum*') ? 'show' : '' }}" aria-expanded="false">
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('poliumum/antrian') ? 'active' : '' }}"
                               href="{{ route('poliumum.antrian') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Antrian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('poliumum.tindakan') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Pemeriksaan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Poli KIA -->
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('polikia*') ? 'active' : '' }}" href="/main/polikia" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-heart me-2"></i>
                        </span>
                        <span class="hide-menu">Poli KIA</span>
                    </a>
                </li>

                <!-- Rawat Inap -->
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('rawatinap*') ? 'active' : '' }}" href="/main/rawatinap" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-building-hospital me-2"></i>
                        </span>
                        <span class="hide-menu">Rawat Inap</span>
                    </a>
                </li>

                <!-- Persuratan -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ request()->is('surat*', 'surat-keterangan-sehat*','surat-keterangan-sakit*') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-envelope-paper me-2"></i>
                        </span>
                        <span>Persuratan</span>
                    </a>
                    <ul class="first-level collapse {{ request()->is('surat*', 'surat-keterangan-sehat*', 'surat-keterangan-sakit*') ? 'show' : '' }}" aria-expanded="false">
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('surat-keterangan-sehat*') ? 'active' : '' }}" href="{{ route('surat.sehat') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span>Surat Sehat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('surat-keterangan-sakit*') ? 'active' : '' }}" href="{{ route('surat.sakit') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span>Surat Sakit</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span>Control</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Rekam Medis -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ request()->is('rekammedis*') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-book me-2"></i>
                        </span>
                        <span>Rekam Medis</span>
                    </a>
                    <ul class="first-level collapse {{ request()->is('rekammedis*') ? 'show' : '' }}" aria-expanded="false">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/rekammedis/dashboard">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/rekammedis/penyakit">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">10 Besar Penyakit</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Master Data -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ request()->is('masterdata*') ? 'active' : '' }}" href="#" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-database me-2"></i>
                        </span>
                        <span>Master Data</span>
                    </a>
                    <ul class="first-level collapse {{ request()->is('masterdata*') ? 'show' : '' }}" aria-expanded="false">
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('masterdata/dokter') ? 'active' : '' }}" href="{{ route('doctor.index') }}">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Data Dokter</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/masterdata/pasien">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Data Pengguna</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/masterdata/layanan">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Layanan</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
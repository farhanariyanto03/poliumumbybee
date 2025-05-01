<!-- Start Vertical Layout Sidebar -->
<aside class="left-sidebar">
    <div>
        <!-- Brand Logo -->
        <div class="brand-logo d-flex align-items-center justify-content-between py-3 px-4">
            <a href="{{ route('dashboard') }}" class="logo-img text-decoration-none text-dark d-flex align-items-center">
                <img src="{{ URL::asset('build/images/logos/logo.png') }}" alt="Logo" class="dark-logo logo-size me-2" />
                <span class="fw-bold fs-5">SIP-Kes</span>
            </a>
            <a href="javascript:void(0)" class="sidebartoggler text-decoration-none fs-5 ms-auto d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav" class="list-unstyled">

            <!-- Dashboard -->
            <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="me-2">
                            <path d="M8 0L0 4v5l8 4 8-4V4zM0 9.5L8 13.5l8-4V4L8 8 0 4z"/>
                            <path d="M0 4L8 8 16 4V3l-8 4-8-4v.5z"/>
                        </svg>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            <!-- Pendaftaran Pasien -->
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow {{ request()->is('pendaftaran*') ? 'active' : '' }}" href="#" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="me-2">
                            <path d="M13 2H3a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2m0 10H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z"/>
                            <path d="M11 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </span>
                    <span>Pendaftaran</span>
                </a>
                <ul class="first-level collapse {{ request()->is('pendaftaran*') ? 'show' : '' }}" aria-expanded="false">
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('pendaftaran') ? 'active' : '' }}" href="{{ route('pendaftaran.create') }}">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Buat Baru</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('pendaftaran/riwayat') ? 'active' : '' }}" href="/pendaftaran/riwayat">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Riwayat Pasien</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Poli Umum -->
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow {{ request()->is('poliumum*') ? 'active' : '' }}" href="#" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="me-2">
                            <path d="M8 1a6 6 0 1 0 0 12A6 6 0 0 0 8 1zm0 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/>
                            <circle cx="8" cy="5" r="1"/>
                            <path d="M10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                        </svg>
                    </span>
                    <span>Poli Umum</span>
                </a>
                <ul class="first-level collapse {{ request()->is('poliumum*') ? 'show' : '' }}" aria-expanded="false">
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('poliumum/antrian') ? 'active' : '' }}" href="/poliumum/antrian">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Antrian</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('poliumum/tindakan') ? 'active' : '' }}" href="/poliumum/tindakan">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Pemeriksaan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Diagnosa & Resep</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Poli KIA -->
            <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('polikia*') ? 'active' : '' }}" href="/main/polikia" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="me-2">
                            <path d="M8 0c-.88 0-1.76.11-2.6.33 1.54 1.13 1.54 3.67 0 4.8C3.86 5.35 3 6.23 3 7.11 3 8.89 6.28 10.3 9.7 9.13c.16.35.37.69.65 1-1.46.42-2.96.63-4.5.63-2.68 0-5.07-1.77-5.07-4.5 0-2.68 1.77-5.07 4.5-5.07 2.68 0 4.5 2.39 4.5 5.07 0 .28-.02.56-.06.83L9.33 9.1c.17-.17.36-.32.56-.44-.23-.08-.46-.13-.7-.13-.55 0-1.05.2-1.44.56-.42-.13-1-.24-1.63-.24-1.05 0-1.99.43-2.56 1.05-.25-.08-.52-.13-.8-.13-1.1 0-2 .9-2 2s.9 2 2 2c.36 0 .7-.11 1.01-.29-.2.3-.32.65-.32.99 0 1.1.9 2 2 2s2-.9 2-2c0-.69-.38-1.31-1-1.59.17-.63.48-1.2.9-1.68.45.18.86.44 1.2.77-1.23-.03-2.46.39-3.4.98zm6.2-2.23v5.33c0 .28-.22.5-.5.5h-1.3c-.28 0-.5-.22-.5-.5V7.5c0-.28.22-.5.5-.5h1.3c.28 0 .5.22.5.5z"/>
                            <path d="M5 10h8a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1a2 2 0 0 1 2-2z"/>
                        </svg>
                    </span>
                    <span class="hide-menu">Poli KIA</span>
                </a>
            </li>

            <!-- Rawat Inap -->
            <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('rawatinap*') ? 'active' : '' }}" href="/main/rawat-inap" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="me-2">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 8a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </span>
                    <span class="hide-menu">Rawat Inap</span>
                </a>
            </li>

            <!-- Farmasi -->
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow {{ request()->is('farmasi*') ? 'active' : '' }}" href="#" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-capsule-pill me-2"></i>
                    </span>
                    <span>Farmasi</span>
                </a>
                <ul class="first-level collapse {{ request()->is('farmasi*') ? 'show' : '' }}" aria-expanded="false">
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('farmasi/dataobat') ? 'active' : '' }}" href="/farmasi/dataobat">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Data Obat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('farmasi/resep') ? 'active' : '' }}" href="/farmasi/resep">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Resep</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('farmasi/pengambilan') ? 'active' : '' }}" href="/farmasi/pengambilan">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Pengambilan Obat</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Pembayaran -->
            <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('pembayaran*') ? 'active' : '' }}" href="/pembayaran">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-currency-dollar me-2"></i>
                    </span>
                    <span>Pembayaran</span>
                </a>
            </li>

            <!-- Persuratan -->
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow {{ request()->is('surat*') ? 'active' : '' }}" href="#" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-envelope-paper me-2"></i>
                    </span>
                    <span>Persuratan</span>
                </a>
                <ul class="first-level collapse {{ request()->is('surat*') ? 'show' : '' }}" aria-expanded="false">
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('surat/sehat') ? 'active' : '' }}" href="{{ route('surat.sehat') }}">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Surat Sehat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('surat/sakit') ? 'active' : '' }}" href="{{ route('surat.sakit') }}">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Surat Sakit</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Control</span>
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
                        <a class="sidebar-link {{ request()->is('rekammedis/dashboard') ? 'active' : '' }}" href="/rekammedis/dashboard">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('rekammedis/penyakit') ? 'active' : '' }}" href="/rekammedis/penyakit">
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
                <a class="sidebar-link has-arrow {{ request()->is('masterdata*') ? 'active' : '' }}" href="#"
                   aria-expanded="false">
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
                        <a class="sidebar-link {{ request()->is('masterdata/pasien') ? 'active' : '' }}" href="/masterdata/pasien">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Data Pengguna</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
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
</aside>
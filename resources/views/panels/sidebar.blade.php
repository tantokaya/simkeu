@php
    $configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">PAYROLL</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            <li class="nav-item active"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span class="menu-title"">Dashboard</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="feather icon-inbox"></i><span class="menu-title"">Master Data</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('karyawan') ? 'active' : '' }}"><a href="{{ route('karyawan') }}"><i class="feather icon-circle"></i><span class="menu-item">Data Karyawan</span></a>
                    </li>
                    <li class="{{ Request::is('golongan') ? 'active' : '' }}"><a href="{{ route('golongan') }}"><i class="feather icon-circle"></i><span class="menu-item">Data Golongan</span></a>
                    </li>
                    <li class="{{ Request::is('status') ? 'active' : '' }}"><a href="{{ route('status') }}"><i class="feather icon-circle"></i><span class="menu-item">Data Status</span></a>
                    </li>
                    <li class="{{ Request::is('unitkerja') ? 'active' : '' }}"><a href="{{ route('unitkerja') }}"><i class="feather icon-circle"></i><span class="menu-item">Unit Kerja</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-loader"></i><span class="menu-title">Transaksi</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('gaji') ? 'active' : '' }}"><a href="{{ route('gaji') }}"><i class="feather icon-circle"></i><span class="menu-item">Input Gaji</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-award"></i><span class="menu-title">Laporan</span></a>
                <ul class="menu-content">
                    {{-- <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Cetak Daftar Karyawan</span></a>
                    </li> --}}
                    <li class="{{ Request::is('cetak_struk') ? 'active' : '' }}"><a href="{{ route('struk') }}"><i class="feather icon-circle"></i><span class="menu-item">Cetak Struk</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-sliders"></i><span class="menu-title">Settings</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="{{ route('user') }}"><i class="feather icon-circle"></i><span class="menu-item">User</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="feather icon-log-out"></i><span class="menu-title">Log out</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            {{-- Foreach menu item ends --}}
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

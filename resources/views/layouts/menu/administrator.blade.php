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
<li class=" nav-item"><a href="#"><i class="feather icon-cpu"></i><span class="menu-title">Setting</span></a>
    <ul class="menu-content">
        <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="{{ route('user') }}"><i class="feather icon-circle"></i><span class="menu-item">User</span></a>
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

<li class=" nav-item"><a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="feather icon-log-out"></i><span class="menu-title">Log out</span></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
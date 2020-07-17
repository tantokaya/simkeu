<li class="nav-item active"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span class="menu-title"">Dashboard</span></a>
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
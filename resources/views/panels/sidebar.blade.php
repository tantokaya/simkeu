@php
    $configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">SIMKEU</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            @if(Request::is('dashboard'))
            <li class="nav-item open"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span class="menu-title"">Dashboard</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span class="menu-title"">Master</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Data Karyawan</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Data Golongan</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Data Status</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Unit Kerja</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Tunjangan</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Potongan</span></a>
                    </li>
                </ul>
            </li>
            @elseif(Request::is('event'))
            <li class=" nav-item open"><a href="#"><i class="feather icon-loader"></i><span class="menu-title">Overview</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="events.html"><i class="feather icon-circle"></i><span class="menu-item">All Events</span></a>
                    </li>
                    <li><a href="subscriptions.html"><i class="feather icon-circle"></i><span class="menu-item">Subscriptions</span></a>
                    </li>
                    <li><a href="internal_events.html"><i class="feather icon-circle"></i><span class="menu-item">Internal Events</span></a>
                    </li>
                    <li><a href="rule_activity"><i class="feather icon-circle"></i><span class="menu-item">Rule Activity</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item open"><a href="#"><i class="feather icon-award"></i><span class="menu-title">Security</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Incidents</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Security Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Network Event Threats</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">All Firewall Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">All Threat Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Unusual Network Trafic</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Blocked Web Traffic</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Virus Attack</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">IDS Scan/Attack Activity</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item open"><a href="#"><i class="feather icon-user"></i><span class="menu-title">IT Operations</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">All Web Traffic</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Software Installation/Update</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Service Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">System Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Error Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Warning Events</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">FTP Traffic</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">SNMP Traffic</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">SMTP Traffic</span></a>
                    </li>
                </ul>
            </li>
            @elseif(Request::is('map-awareness'))
                <li class="active"><a href="{{ route('map-awareness') }}"><i class="feather icon-circle"></i><span class="menu-item">Map Awareness</span></a></li>
            @elseif(Request::is('report'))
            <li class=" nav-item open"><a href="{{ route('report') }}"><i class="feather icon-file-text"></i><span class="menu-title">Report</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Daily Report</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Weekly Report</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Monthly Report</span></a>
                    </li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Annual Report</span></a>
                    </li>
                </ul>
            </li>
            @elseif(Request::is('setting'))
            <li class=" nav-item"><a href="{{ route('setting') }}"><i class="feather icon-sliders"></i><span class="menu-title">Setting</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Users</span></a></li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Sensor</span></a></li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">IP Severity</span></a></li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Threshold</span></a></li>
                    <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Configuration</span></a></li>
                </ul>
            </li>
            @endif
            {{-- Foreach menu item ends --}}
        </ul>
    </div> 
</div>
<!-- END: Main Menu-->

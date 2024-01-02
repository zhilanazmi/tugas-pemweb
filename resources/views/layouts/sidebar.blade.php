<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    @if (auth()->user()->level == 'Admin')
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div>
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard <sup></sup></div>
    </a>
    @endif

    @if (auth()->user()->level == 'Kasir')
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div>
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kasir Dashboard <sup></sup></div>
    </a>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Barang</span></a>
    </li>
    
    @if (auth()->user()->level == 'Admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kategori</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
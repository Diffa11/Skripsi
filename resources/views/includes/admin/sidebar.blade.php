<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-text mx-3">
                    yukngaji Admin
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <!-- Nav Item - Paket Travel -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('kelas.index')}}">
                    <i class="fas fa-fw fa-hotel"></i>
                    <span>Kelas</span></a>
            </li>

            <!-- Nav Item - Galeri Travel -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('kategori.index')}}">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Nav Item - Transaksi -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('materi.index')}}">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Materi</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
    <!-- End of Sidebar -->
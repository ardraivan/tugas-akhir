<!-- resources/views/components/sidebar.blade.php -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- App Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('images/logoapp.png') }}" alt="Company Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TrApp</span>
    </a>    

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel  -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
            <div class="info">
                <a href="#" class="d-block">Ardra</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data-kendaraan" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Data Kendaraan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="laporan-pemeliharaan" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Laporan Pemeliharaan</i></p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <a href="#" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();" style="display: flex; align-items: center;">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

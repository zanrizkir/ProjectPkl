<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/kelawar.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <iframe src="https://youtu.be/l_YbymsZsjE" frameborder="0" class="rounded-circle" width="60px"
                    height="60px"></iframe> --}}
                {{-- <iframe width="60" height="60" src="https://www.youtube.com/embed/l_YbymsZsjE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    autoplay class="rounded-circle"></iframe> --}}
                <img src="{{ asset('assets/dist/img/kobo.gif') }}" class="rounded-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/home" class="nav-link {{ $active == 'home' ? 'active' : null }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/post" class="nav-link {{ $active == 'post' ? 'active' : null }}">
                        <p>
                            Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/wali" class="nav-link {{ $active == 'wali' ? 'active' : null }}">
                        <p>
                            Wali
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/siswa" class="nav-link {{ $active == 'siswa' ? 'active' : null }}">
                        <p>
                            siswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/jurusan" class="nav-link {{ $active == 'jurusan' ? 'active' : null }}">
                        <p>
                            Jurusan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/nilai" class="nav-link {{ $active == 'nilai' ? 'active' : null }}">
                        <p>
                            Nilai
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

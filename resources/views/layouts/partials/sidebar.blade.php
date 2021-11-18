<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/2.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @auth
                <a herf="#" class="d-block">{{Auth::user()->name}}</a>
            @else
                <a href="#" class="d-block">Guest</a>
            @endauth

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{ route("kategori.index") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">

                      <p>Data Kategori</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route("barang.index") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">

                      <p>Data Barang</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route("bmasuk.index") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">

                      <p>Barang Masuk</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route("trans.index") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">

                      <p>Transaksi</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route("bkeluar.index") }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">

                      <p>Barang Keluar</p>
                    </a>
                  </li>
              {{-- <li class="nav-item">
                <a href="./kategori" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./barang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./bmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./transaksi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./bkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p> --}}
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

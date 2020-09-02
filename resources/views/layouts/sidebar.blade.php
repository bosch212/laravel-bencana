<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('profile/logo_ppsi.png')}}" alt="SIBA Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIBA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>

                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admins/data/bencana" class="nav-link">
                  <p>Data Bencana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/data/korban" class="nav-link">
                  <p>Data Korban</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/data/posko" class="nav-link">
                  <p>Data Posko</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/data/kerusakan" class="nav-link">
                  <p>Data Kerusakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/data/berita" class="nav-link">
                  <p>Input Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admins/data/kegiatan" class="nav-link">
                  <p>Input Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admins/master/jenis" class="nav-link">
                  <p>Data Jenis Bencana</p>
                </a>
              </li>
            </ul>
            @if(auth()->user()->role == 'admin')

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admins/master/petugas" class="nav-link">
                  <p>Data Petugas</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light" data-overlay data-sticky="top">
        <div class="container">
            <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="/">
                <img alt="siba"  src="{{url('assetshome/img/logos/logo_ppsi_no.png')}}">
            </a>
            <div class="d-flex align-items-center order-lg-3">
                <a href="{{url('/homepages/lapor')}}"
                    class="btn btn-danger ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Lapor</a>
                <a href="/login"
                    class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Login</a>
            </div>
            <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                <ul class="navbar-nav my-3 my-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-item"
                                href="{{route ('home') }}" role="button">Peta Bencana</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true"
                                class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid"
                                href="#" role="button">Data</a>
                            <div class="row dropdown-menu">
                                <div class="col-auto" data-dropdown-content>
                                    <div class="dropdown-grid-menu">
                                        <a href="{{route ('homepages-data-bencana') }}"
                                            class="dropdown-item fade-page">Data Bencana</a>
                                        <a href="{{route ('homepages-grafik-bencana') }}"
                                            class="dropdown-item fade-page">Grafik Bencana</a>
                                        <a href="{{route ('homepages-data-korban') }}"
                                            class="dropdown-item fade-page">Data Korban</a>
                                        <a href="{{route ('homepages-data-kerusakan') }}"
                                            class="dropdown-item fade-page">Data Kerusakan</a>
                                        <a href="{{route ('homepages-data-posko') }}"
                                            class="dropdown-item fade-page">Data Posko</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true"
                                class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid"
                                href="#" role="button">Informasi</a>
                            <div class="row dropdown-menu">
                                <div class="col-auto" data-dropdown-content>
                                    <div class="dropdown-grid-menu">
                                        <a href="{{route ('homepages-berita') }}" class="dropdown-item">Berita</a>
                                        <a href="{{route ('homepages-kegiatan') }}" class="dropdown-item">Galeri
                                            Kegiatan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

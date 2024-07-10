<!-- Header -->
<header class="header">

    <!-- Header Content -->
    <div class="header_container" style="z-index: 99999;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_text">Unic<span>at</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li><a class="nav-link" href="<?= base_url('home'); ?>" style="text-transform: uppercase;">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;">
                                        Form
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('User_Formulir_pelaporan') ?>">Form Pelaporan Kerusakan</a>
                                        <a class="dropdown-item" href="<?= base_url('User_Formulir_perencanaan') ?>">Form Usulan Perencanaan</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;">
                                        Tabel Data
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="<?= base_url('User_Tabel_Pelaporan') ?>">Tabel Pelaporan Kerusakan</a>
                                        <a class="dropdown-item" href="<?= base_url('User_Tabel_Perencanaan') ?>">Tabel Usulan Perencanaan</a>

                                    </div>
                                </li>

                                <li><a href="<?= base_url('User_Peta') ?>" class="nav-link" style="text-transform: uppercase;">Peta</a></li>
                                <li><a href="<?= base_url('User_Data') ?>" class="nav-link" style="text-transform: uppercase;">Data</a></li>
                                <li><a href="<?= base_url('User_tentang'); ?>" class="nav-link" style="text-transform: uppercase;">Tentang</a></li>
                            </ul>
                            <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <!-- Hamburger -->
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
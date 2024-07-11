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
                                <li>
                                    <a class="nav-link" href="<?= base_url('User_Formulir'); ?>" style="text-transform: uppercase;">Form</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="<?= base_url('User_Tabel'); ?>" style="text-transform: uppercase;">Tabel</a>
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
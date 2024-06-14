<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="active"><a href="<?= base_url('home'); ?>">Beranda</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px;">
                    Form
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('User_Formulir_pelaporan') ?>">Form Pelaporan Kerusakan</a>
                    <a class="dropdown-item" href="<?= base_url('User_Formulir_perencanaan') ?>">Form Usulan Perencanaan</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px;">
                    Tabel Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('User_Tabel_Pelaporan') ?>">Tabel Pelaporan Kerusakan</a>
                    <a class="dropdown-item" href="<?= base_url('User_Tabel_Perencanaan') ?>">Tabel Usulan Perencanaan</a>
                </div>
            </li>

            <li><a href="<?= base_url('User_Peta') ?>">Peta</a></li>
            <li><a href="<?= base_url('User_Data') ?>">Data</a></li>
            <li><a href="<?= base_url('User_tentang'); ?>">Tentang</a></li>
        </ul>
    </nav>
</div>
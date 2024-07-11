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

            <li>
                <a href="<?= base_url('User_Formulir') ?>">Form</a>
            </li>

            <li>
                <a href="<?= base_url('User_Tabel') ?>">Tabel</a>
            </li>

            <li><a href="<?= base_url('User_Peta') ?>">Peta</a></li>
            <li><a href="<?= base_url('User_Data') ?>">Data</a></li>
            <li><a href="<?= base_url('User_tentang'); ?>">Tentang</a></li>
        </ul>
    </nav>
</div>
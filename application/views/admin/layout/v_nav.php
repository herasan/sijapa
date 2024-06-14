<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit fa-fw"></i> Formulir<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('formulir_pelaporan')?>">Formulir Pelaporan Kerusakan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('formulir_perencanaan')?>">Formulir Usulan Perencanaan</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Tabel Data<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('tabel_pelaporan')?>">Tabel Pelaporan Kerusakan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('tabel_perencanaan')?>">Tabel Usulan Perencanaan</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="<?= base_url('Admin/peta') ?>"><i class="fa fa-map"></i> Peta</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/viewbasemap') ?>"><i class="fa fa-map"></i> Basemap</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/marker') ?>"><i class="fa fa-map"></i> Marker</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/getcoordinate') ?>"><i class="fa fa-map"></i> Get Coordinate</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/rute') ?>"><i class="fa fa-map"></i> Rute</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/rute2') ?>"><i class="fa fa-map"></i> Rute Dari User</a>
            </li>

            <li>
                <a href="<?= base_url('Admin/pemetaan') ?>"><i class="fa fa-map"></i> Pemetaan Lokasi</a>
            </li>

            <li>
                <a href="data"><i class="fa fa-database"></i> Data</a>
            </li>
            <li>
                <a href="tentang"><i class="fa fa-info-circle"></i> Tentang</a>
            </li>

           
            <li class="active">
                <a href="<?= base_url('login/logout') ?> "><i class="fa fa-sign-out"></i> Logout</a>

                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><?= $title2 ?></h2>
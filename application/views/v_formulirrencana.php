<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/front-end/'); ?>styles/blog.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/front-end/'); ?>styles/blog_responsive.css">
</head>

<style>
    .panel-primary {
        margin-top: 150px;

    }

    .panel-heading {
        padding: 8px;
    }

    .form-group {
        font-family: Arial,
            sans-serif;
        font-size: 14px;
    }

    .form-control {
        font-family: Arial,
            sans-serif;
        font-size: 12px;
    }
</style>
<div class="col-lg-10 mx-auto">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="text-center" style="font-family: Arial, sans-serif; font-size: 16px;">Formulir Pelaporan Kerusakan Jaringan Prasarana</h1>
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('user_tabel_perencanaan/tambah'); ?>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Pelapor</label>
                    <input class="form-control" type="text" name="nama_pelapor" placeholder="Nama Pelapor" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Alamat Pelapor</label>
                    <input class="form-control" type="text" name="alamat_pelapor" placeholder="Alamat Pelapor" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nomor Telepon Pelapor</label>
                    <input class="form-control" type="text" name="telepon_pelapor" placeholder="Nomor Telepon Pelapor" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Tanggal Pelaporan</label>
                    <input class="form-control" type="date" name="tanggal_pelaporan" placeholder="Tanggal Pelaporan" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Jenis Jaringan Prasarana</label>
                    <select class="form-control" name="jenis_jaringan" placeholder="Jenis Jaringan Prasarana" required>
                        <option value="">--Pilih--</option>
                        <option>Jaringan Air Minum</option>
                        <option>Jaringan Infrastruktur Pengelolaan Air</option>
                        <option>Jaringan Drainase</option>
                        <option>Jaringan Energi</option>
                        <option>Jaringan Persampahan</option>
                        <option>Jaringan Prasarana Lainnya</option>
                        <option>Jaringan Sumber Daya Air</option>
                        <option>Jaringan Telekomunikasi</option>
                        <option>Jaringan Transportasi</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Marker</label>
                    <select class="form-control" name="marker_rencana" placeholder="Marker Jaringan Prasarana" required>
                        <option value="">--Pilih--</option>
                        <option value="airlimbah.png">Jaringan Infrastruktur Pengelolaan Limbah</option>
                        <option value="airminum.png">Jaringan Air Minum</option>
                        <option value="drainase.png">Jaringan Drainase</option>
                        <option value="energi.png">Jaringan Energi</option>
                        <option value="persampahan.png">Jaringan Persampahan</option>
                        <option value="prasaranalainnya.png">Jaringan Prasarana Lainnya</option>
                        <option value="sumberdayaair.png">Jaringan Sumber Daya Air</option>
                        <option value="telekomunikasi.png">Jaringan Telekomunikasi</option>
                        <option value="transportasi.png">Jaringan Transportasi</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Tujuan Perencanaan</label>
                    <input class="form-control" type="text" name="tujuan_perencanaan" placeholder="Tujuan Perencanaan Jaringan Prasarana" required>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Detail Lokasi</label>
                    <input class="form-control" type="text" name="detail_lokasi" placeholder="Alamat Lokasi Perencanaan Jaringan Prasarana" required>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" type="text" name="latitude" placeholder="Koordinat Latitude" required>

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" type="text" name="longitude" placeholder="Koordinat Longitude" required>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" type="text" name="foto" placeholder="Foto Jaringan Prasarana" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button style="font-family: Arial, sans-serif; font-size: 14px;" type="submit" class="btn btn-primary">Simpan</button>
                    <button style="font-family: Arial, sans-serif; font-size: 14px;" type="riset" class="btn btn-success">Reset</button>
                </div>
            </div>
            <?php echo form_close(); ?>


        </div>
    </div>
</div>
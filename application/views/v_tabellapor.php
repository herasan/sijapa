<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/front-end/'); ?>styles/blog.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/front-end/'); ?>styles/blog_responsive.css">
</head>

<style>
    .panel-primary {
        margin-top: 100px;

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
<div class="blog">
    <div class="col-lg-10 mx-auto">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <a href="<?= base_url('User_Tabel_Pelaporan/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add</a>
            </div>
            <div class="panel-body">
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Jenis Jaringan Prasarana</th>
                            <th class="text-center">Detail Kerusakan</th>
                            <th class="text-center">Marker</th>
                            <th class="text-center">Detail Lokasi</th>
                            <th class="text-center">Latitude</th>
                            <th class="text-center">Longitude</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Status Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pelaporan as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->jenis_jaringan ?></td>
                                <td><?= $value->detail_kerusakan ?></td>
                                <td><?= $value->marker ?></td>
                                <td><?= $value->detail_lokasi ?></td>
                                <td><?= $value->latitude ?></td>
                                <td><?= $value->longitude ?></td>
                                <td><img src="<?= base_url('assets/foto_pelaporan/' . $value->foto) ?>" width="100px"></td>
                                <td>a</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
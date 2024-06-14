<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class= " fa fa-plus"></i>Add</button>
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
                    <th class="text-center">Nama Pelopor</th>
                    <th class="text-center">Alamat Pelapor</th>
                    <th class="text-center">Nomor Telepon</th>
                    <th class="text-center">Tanggal Pelaporan</th>
                    <th class="text-center">Jenis Jaringan Prasarana</th>
                    <th class="text-center">Detail Kerusakan</th>
                    <th class="text-center">Marker</th>
                    <th class="text-center">Detail Lokasi</th>
                    <th class="text-center">Latitude</th>
                    <th class="text-center">Longitude</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">Status Laporan</th>
                   
                </tr>

                </thead>
                <tbody>
                <?php $no=1; foreach ($pelaporan as $key => $value) {?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$value->nm_pelapor ?></td>
                    <td><?=$value->al_pelapor ?></td>
                    <td><?=$value->telpon_pelapor ?></td>
                    <td><?=$value->tanggal_lapor ?></td>
                    <td><?=$value->jenis_jaringan ?></td>
                    <td><?=$value->detail_kerusakan ?></td>
                    <td><?=$value->marker?></td>
                    <td><?=$value->detail_lokasi ?></td>
                    <td><?=$value->latitude?></td>
                    <td><?=$value->longitude ?></td>
                    <td><img src="<?= base_url('assets/foto_pelaporan/'.$value->foto)?>" width="100px"></td>
                    <td>
                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_lapor?>"><i class="fa fa-pencil"></i> Edit </button>
                        <a href="<?= base_url('tabel_pelaporan/hapus/'. $value->id_lapor)?>" onclick="return confirm('Apakah Data Ini Yakin Akan Dihapus?')" class="btn btn-xs btn-danger" ><i class=" fa fa-trash"></i> Hapus</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-xs btn-success" ><i class="fa fa-pencil"></i> Disetujui</a>
                        <a href="" class="btn btn-xs btn-danger" ><i class=" fa fa-trash"></i> Diproses</a>
                        <a href="" class="btn btn-xs btn-success" ><i class="fa fa-pencil"></i> Selesai</a>
                    </td>

                </tr>
                <?php } ?>
            </tbody>
                
            </table>
    </div>
    
    </div>
</div>

 <!-- Modal Add Data -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Pelaporan Kerusakan Jaringan Prasarana</h4>
                </div>
                <div class="modal-body">
                
                <?php echo form_open_multipart('tabel_pelaporan/tambah'); ?>
                
                <div class="form-group">
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
                            <select  class="form-control" name="marker" placeholder="Marker Jaringan Prasarana" required>
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
                            <label>Detail Kerusakan</label>
                            <input class="form-control" type="text" name="detail_rusak" placeholder="Detail Kerusakan Jaringan Prasarana" required>
                
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Detail Lokasi</label>
                            <input class="form-control" type="text" name="detail_lokasi" placeholder="Alamat Lokasi Kerusakan Jaringan Prasarana" required>
                
                        </div>
                    </div> 

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Latitude</label>
                            <input  class="form-control" type="text" name="latitude" placeholder="Koordinat Latitude" required>
                
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
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
<!-- /.modal-content -->
        </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal add data -->


 <!-- Modal Edit Data -->
 <?php foreach ($pelaporan as $key => $value) {?>
 <div class="modal fade" id="edit<?= $value->id_lapor?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pelaporan Kerusakan Jaringan Prasarana</h4>
                </div>
                <div class="modal-body">
                
                <?php echo form_open('tabel_pelaporan/edit/'. $value->id_lapor); ?>
                <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Pelapor</label>
                        <input class="form-control" type="text" name="nama_pelapor" value="<?=$value->nm_pelapor?>" placeholder="Nama Pelapor" required>
                    </div>
                </div>
                    
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat Pelapor</label>
                        <input class="form-control" type="text" name="alamat_pelapor" value="<?=$value->al_pelapor?>" placeholder="AlamatPelapor" required>
                    </div>
                </div>
                    
                <div class="col-md-12">
                    <div class="form-group">    
                        <label>Nomor Telepon Pelapor</label>
                        <input class="form-control" type="text" name="telepon_pelapor" value="<?=$value->telpon_pelapor?>" placeholder="Nomor Telepon Pelapor" required>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group"> 
                        <label>Tanggal Pelaporan</label>
                        <input class="form-control" type="date" name="tanggal_pelaporan" value="<?=$value->tanggal_lapor?>" placeholder="Tanggal Pelaporan" required>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jenis Jaringan Prasarana</label>
                        <select class="form-control" name="jenis_jaringan">
                            <option value="<?=$value->jenis_jaringan?>"><?= $value->jenis_jaringan ?></option> 
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
                        <label>Detail Kerusakan</label>
                        <input class="form-control" type="text" name="detail_rusak" value="<?=$value->detail_kerusakan?>" placeholder="Detail Kerusakan" required>
                    </div>
                </div> 

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Marker</label>
                            <select  class="form-control" name="marker">
                                <option value="<?=$value->marker?>"><?= $value->marker ?></option>
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
                        <label>Detail Lokasi</label>
                        <input class="form-control" type="text" name="detail_lokasi" value="<?=$value->detail_lokasi?>" placeholder="Detail Lokasi Kerusakan Jaringan Prasarana" required>
                    </div>
                </div> 
                    
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Latitude</label>
                        <input  class="form-control" type="text" name="latitude" value="<?=$value->latitude?>" >
                    </div>
                </div> 

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Longitude</label>
                        <input  class="form-control" type="text" name="longitude" value="<?=$value->longitude?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <img src="<?= base_url('assets/foto_pelaporan/'.$value->foto)?>" width="150px">
                    </div>
                    <div class="form-group">
                        <label>Ganti Foto</label>
                        <input type="file" class="form_control" type="text" name="foto">
                    </div>
                </div>
            </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
<!-- /.modal-content -->
        </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal Edit data -->

<?php } ?>
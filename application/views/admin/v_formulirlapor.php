<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Formulir
        </div>
    <div class="panel-body">
        <?php 

    echo form_open_multipart('formulir_pelaporan/tambah') ?>

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
                <input class="form-control" type="text" name="detail_rusak" placeholder="Koordinat Latitude" required>
    
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
                <input class="form-control" type="text" name="foto" placeholder="Foto Jaringan Prasarana" required>
    
            </div>
       
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="riset" class="btn btn-success">Reset</button>
               
        </div>
    </div>
    

    <?php echo form_close(); ?>

    
    </div>
</div>
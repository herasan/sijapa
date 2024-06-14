<div class="card-body">
    <div clas="row">
        <div class="col-sm-7">
            <!-- Peta -->
            <div id="map" style="width: 100%; height: 600px;"></div>
            <!-- End Peta -->
        </div>
        <div clas="col-sm-5">
            <?php 
                echo validation_errors('<div class=alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hideen="true">&times;</button>', '</div>');
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hideen="true">&times;</button>;' . $error_upload . '</div>';
                    echo form_open_multipart('Formulir_Perencanaan/tambah');
                }?>

                <div class= "form-group">
                    <label>Nama Pelapor</label>
                    <input class="form-control" type="text" name="nama_pelapor" placeholder="Nama Pelapor" required>
                    <label>Alamat Pelapor</label>
                    <input class="form-control" type="text" name="alamat_pelapor" placeholder="Alamat Pelapor" required>
                    <div class="form-group" >
                        <label>Marker</label>
                        <select name="marker" class="form_control">
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
                    
                    <label>Latitude</label>
                    <input class="form-control" type="text" name="latitude" placeholder="Latitude" required>
                    
                    <label>Longitude</label>
                    <input class="form-control" type="text" name="longitude" placeholder="Longitude" required>
                    
                    <label>Gambar</label>
                    <input class="form-control" type="text" name="gambar" placeholder="Gambar" required>
                
                    <div>
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <button type="reset" class="btn btn-success">Reset</button>
                    </div>
                </div>
                
                <?php 
                echo form_close();
                 ?>
                
        </div>
    </div>
</div>


<script>
    var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {  
        maxZoom: 22,  
        attribution: 'WebGIS Trainning by Roni Haryadi-0823-8812-8916'  
    }); 
    var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
        maxZoom: 19, 
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' 
            }); 
 
            var map = L.map('map', {       
                center: [3.876956, 101.837510], 
                zoom: 7, 
                zoomControl:false, 
                layers: [GoogleSatelliteHybrid] 
            }); 
 
            var baseLayers = { 
                "Google Satellite Hybrid": GoogleSatelliteHybrid, 
                "Open Street Map Mapnik": OpenStreetMap_Mapnik 
            }; 
 
            var overlays = { 
 
            };     
            L.control.layers(baseLayers).addTo(map); 
            // L.Control.geocoder({position :"topleft", collapsed:false}).addTo(map); 
 
            var curLocation=[0,0]; 
            if (curLocation[0]==0 && curLocation[1]==0) { 
                curLocation =[3.876956, 101.837510];     
            } 
 
            map.attributionControl.setPrefix(false); 
            var marker = new L.marker(curLocation, { 
                draggable:'true' 
            }); 
 
            marker.on('dragend', function(event) { 
            var position = marker.getLatLng(); 
            marker.setLatLng(position,{ 
                draggable : 'true' 
                }).bindPopup(position).update(); 
                $("#Latitude").val(position.lat); 
                $("#Longitude").val(position.lng).keyup(); 
            }); 
 
            $("#Latitude, #Longitude").change(function(){ 
                var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())]; 
                marker.setLatLng(position, { 
                draggable : 'true'
        }).bindPopup(position).update(); 
        map.panTo(position); 
        }); 
        map.addLayer(marker); 

</script>
<div class="row">
    <div class= "col-sm-12">
        <div class="form-group">
            <label>Jarak (Meter)</label>
            <input class="form-control" name="jarak" id="Jarak">
        </div>
    </div>
</div>

<div id="map" style="width: 100%; height: 500px;">
<script>
    var peta1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


    var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: '© Google Maps',
        maxZoom: 20,
    });


    var peta3 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });


    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox/outdoors-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q'
    });


    var peta5 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


    var peta6 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });


    var peta7 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://carto.com/attributions">CARTO</a>'
    });


    var peta8 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Map data &copy; <a href="https://www.arcgis.com/">ArcGIS</a>'
    });


    var peta9 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });


    var peta10 = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });

    const map = L.map('map', {
	center: [-7.79249173482206, 110.37105572770332],
	zoom: 13,
	layers: [peta5]
    });

    const baseLayers = {
	'Peta 1'    : peta5,
	'Peta 2'    : peta9,
    'Peta 3'    : peta2,
    'Peta 4'    : peta8,
    };

    const layerControl = L.control.layers(baseLayers).addTo(map);
    
    //Mencari Koordinat User
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
        //Rute
        var routingControl = L.Routing.control({
            waypoints: [
                L.latLng(position.coords.latitude, position.coords.longitude),         //Titik Awal
                L.latLng(-7.752449475929338, 110.36095234261683)       //Titik Tujuan
            ]
            }).addTo(map);

            //Mengambil Jarak
            routingControl.on('routesfound', function(e){
                var routes          = e.routes;
                var summary         = routes[0].summary;
                var totalDistance   = summary.totalDistance;
            //Mengirimkan Nilai Jarak ke elemen input
            document.getElementById('Jarak').value = totalDistance;
                
            //menjalankan animasi
            animatecar(routes[0]);
    });
        });

        //Animasi 
        function animatecar(route) {
            var iconMobil   = L.icon({
                iconUrl     : '<?= base_url('assets/marker/mobil.png')?>',
                iconSize    : [60,60],
            })

            var mobil   = L.marker([route.coordinates[0].lat, route.coordinates[0].lng], {
                icon : iconMobil
            }).addTo(map);
            var index   = 0;
            var maxIndex  = route.coordinates.length -1;

            function animate() {
                mobil.setLatLng([route.coordinates[index].lat, route.coordinates[index].lng]);
                index++;
                if (index > maxIndex) {
                    index = 0;
                }
                setTimeout(animate, 200);
            }
            animate();
        }
        } else {
            alert("Geolocation tidak didukung oleh browser ini !!")
        }


</script>

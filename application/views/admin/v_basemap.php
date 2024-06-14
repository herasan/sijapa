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
	center: [-6.948178689566554, 110.26628080858126],
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

    //Data Jaringan Air Minum GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Airminum.geojson')?>", function (data) {
            geoLayer = L.geoJson(data, {
            style: function(feature) {
                return {
                    color : '#00a9e6',
                    fillOpacity : 1.0,
                }
            }
        }).addTo(map);

        //Menampilkan PopUP
        geoLayer.eachLayer(function(layer){
            layer.bindPopup("Pop Up Information");
        });
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Airminum.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan Drainase GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Drainase.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Drainase.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan Energi GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Energi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Energi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan Prasarana Lainnya GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Prasaranalainnya.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Prasaranalainnya.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan SDA GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_SDA.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_SDA.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });


    //Data Jaringan Telekomunikasi GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Telekomunikasi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Telekomunikasi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan Transportasi GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Line_Jaringan_Transportasi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Transportasi.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });

    //Data Jaringan Infrsatruktur Air Limbah GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Airlimbah.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });


    //Data Jaringan Persampahan GeoJSON
    $.getJSON("<?= base_url('jaringanprasarana/Point_Jaringan_Persampahan.geojson')?>", function (data) {
        geoLayer = L.geoJson(data).addTo(map);
    });
</script>

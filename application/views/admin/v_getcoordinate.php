<div class="form-grup">
    <label for="">Posisi</label>
    <input type="text" id="Posisi" name="posisi" class="form-control">
</div>

<div id="map" style="width: 100%; height: 400px;">

    <script>
        //Geolocation

        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        } else {
           alert("Geolocation tidak didukung oleh browser ini !!")
        }

        function showPosition(position) {
            var x   = document.getElementById("Posisi");
            x.value = position.coords.latitude + "," + position.coords.longitude;
            //Menampilkan Lokasi ke dalam peta
            const map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 12);

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            
            //Menampilkan marker user

            L.marker([position.coords.latitude, position.coords.longitude])
            .addTo(map)
            .bindPopup('Posisi Anda !')
            .openPopup();
            
        }
    </script>

</div>
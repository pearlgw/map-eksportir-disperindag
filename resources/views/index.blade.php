<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Eksportir</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        * {
            margin: 0;
        }

        #map {
            height: 100vh;
        }

        #searchBox {
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            padding: 8px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <input type="text" id="searchBox" placeholder="Cari lokasi..." />
    <div id="map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        var map = L.map('map', {
            center: [-7.150975, 110.140259], // Titik tengah Jateng (kurang lebih di tengah)
            zoom: 9,
            maxBounds: [
                [-8.5, 108.5], // Batas barat daya
                [-5.5, 112.5] // Batas timur laut
            ],
            maxBoundsViscosity: 1.0
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var customIcon = L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        var markers = {};

        // Data kota dari Laravel
        var cities = @json($cities);

        cities.forEach(city => {
            var coords = [parseFloat(city.latitude), parseFloat(city.longitude)];

            // Tentukan warna berdasarkan nama kota
            var isKabupaten = city.name.toLowerCase().includes("kabupaten");
            var iconUrl = isKabupaten ?
                'https://cdn-icons-png.flaticon.com/512/684/684908.png' // 🔴 Marker merah untuk Kabupaten
                :
                'https://upload.wikimedia.org/wikipedia/commons/8/88/Map_marker.svg'; // 🔵 Marker biru untuk Kota

            var customIcon = L.icon({
                iconUrl: iconUrl,
                iconSize: [32, 32], // Ukuran default 32px
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });

            var marker = L.marker(coords, {
                    icon: customIcon
                })
                .bindPopup(`
                    <b style="font-size: 16px;"'>${city.name}</b><br>
                    <span style="font-size: 15px;">Jumlah Eksportir: ${city.eksportirs_count}</span><br>
                    <a href="/export-csv/${city.id}" target="_blank" style="color: blue; text-decoration: underline; font-size: 15px;">
                        Download Data Eksportir ${city.name}
                    </a>
                `)
                .addTo(map);

            markers[city.name.toLowerCase()] = {
                marker,
                coords
            };
        });

        document.getElementById("searchBox").addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                var searchQuery = this.value.toLowerCase().trim();
                if (markers[searchQuery]) {
                    var {
                        marker,
                        coords
                    } = markers[searchQuery];
                    map.setView(coords, 13);
                    marker.openPopup();
                } else {
                    alert("Lokasi tidak ditemukan! Coba masukkan nama kota yang tersedia.");
                }
            }
        });
    </script>

</body>

</html>

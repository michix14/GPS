<!DOCTYPE html>
<html>
<head>
    <title>View GPS Data</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Estilo para el contenedor del mapa */
        #map {
            height: 50vh; /* Altura del 50% de la altura de la ventana */
            width: 100%;   /* Asegura que el mapa ocupe el 100% del ancho */
        }

        /* Estilo para el cuerpo y el contenedor */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .data {
            margin-bottom: 20px;
        }

        .data p {
            margin: 5px 0;
        }

        .data a {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .data a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ver datos</h1>
        <div class="data">
            <p><strong>ID:</strong> {{ $gps->id }}</p>
            <p><strong>Latitud:</strong> {{ $gps->latitude }}</p>
            <p><strong>Longitud:</strong> {{ $gps->longitude }}</p>
            <p><strong>Placa:</strong> {{ $gps->placa }}</p>
            <p><strong>Suben:</strong> {{ $gps->suben }}</p>
            <p><strong>Bajan:</strong> {{ $gps->bajan }}</p>
            <p><strong>Linea:</strong> {{ $gps->linea }}</p>
            <a href="{{ route('gps.index') }}">Back</a>
        </div>
        <!-- Contenedor del mapa -->
        <div id="map"></div>
    </div>

    <!-- Incluir Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        var map = L.map('map').setView([{{ $gps->latitude }}, {{ $gps->longitude }}], 13);

        // Añadir el tile layer de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Añadir un marcador en la posición especificada
        L.marker([{{ $gps->latitude }}, {{ $gps->longitude }}]).addTo(map)
            .bindPopup('Latitude: {{ $gps->latitude }}<br>Longitude: {{ $gps->longitude }}')
            .openPopup();
    </script>
</body>
</html>

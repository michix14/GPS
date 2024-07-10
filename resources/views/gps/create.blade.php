<!DOCTYPE html>
<html>
<head>
    <title>SIG</title>
</head>
<body>
    <h1>Agregar</h1>
    <form action="{{ route('gps.store') }}" method="POST">
        @csrf
        <label>Latitud:</label>
        <input type="text" id="latitude" name="latitude"><br><br>
        <label>Longitud:</label>
        <input type="text" id="longitude" name="longitude"><br><br>
        <label>Placa:</label>
        <input type="text" name="placa"><br><br>
        <label>Suben:</label>
        <input type="number" name="suben"><br><br>
        <label>Bajan:</label>
        <input type="number" name="bajan"><br><br>
        <label>Linea:</label>
        <input type="text" name="linea"><br><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('gps.index') }}">Atras</a>

    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitude').value = position.coords.latitude;
                document.getElementById('longitude').value = position.coords.longitude;
            });
        } else {
            alert("Geolocalizacion no es soportada por este dispositivo.");
        }
    </script>
</body>
</html>

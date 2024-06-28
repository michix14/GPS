<!DOCTYPE html>
<html>
<head>
    <title>Add GPS Data</title>
</head>
<body>
    <h1>Add GPS Data</h1>
    <form action="{{ route('gps.store') }}" method="POST">
        @csrf
        <label>Latitude:</label>
        <input type="text" id="latitude" name="latitude"><br><br>
        <label>Longitude:</label>
        <input type="text" id="longitude" name="longitude"><br><br>
        <label>Placa:</label>
        <input type="text" name="placa"><br><br>
        <label>Suben:</label>
        <input type="number" name="suben"><br><br>
        <label>Bajan:</label>
        <input type="number" name="bajan"><br><br>
        <label>Linea:</label>
        <input type="text" name="linea"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('gps.index') }}">Back</a>

    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitude').value = position.coords.latitude;
                document.getElementById('longitude').value = position.coords.longitude;
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    </script>
</body>
</html>

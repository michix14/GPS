<!-- resources/views/gps/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View GPS Data</title>
</head>
<body>
    <h1>View GPS Data</h1>
    <p><strong>ID:</strong> {{ $gps->id }}</p>
    <p><strong>Latitude:</strong> {{ $gps->latitude }}</p>
    <p><strong>Longitude:</strong> {{ $gps->longitude }}</p>
    <p><strong>Placa:</strong> {{ $gps->placa }}</p>
    <p><strong>Suben:</strong> {{ $gps->suben }}</p>
    <p><strong>Bajan:</strong> {{ $gps->bajan }}</p>
    <p><strong>Linea:</strong> {{ $gps->linea }}</p>
    <a href="{{ route('gps.index') }}">Back</a>
</body>
</html>

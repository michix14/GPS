<!-- resources/views/gps/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit GPS Data</title>
</head>
<body>
    <h1>Edit GPS Data</h1>
    <form action="{{ route('gps.update', $gps->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Latitude:</label>
        <input type="text" name="latitude" value="{{ $gps->latitude }}"><br><br>
        <label>Longitude:</label>
        <input type="text" name="longitude" value="{{ $gps->longitude }}"><br><br>
        <label>Placa:</label>
        <input type="text" name="placa" value="{{ $gps->placa }}"><br><br>
        <label>Suben:</label>
        <input type="number" name="suben" value="{{ $gps->suben }}"><br><br>
        <label>Bajan:</label>
        <input type="number" name="bajan" value="{{ $gps->bajan }}"><br><br>
        <label>Linea:</label>
        <input type="text" name="linea" value="{{ $gps->linea }}"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('gps.index') }}">Back</a>
</body>
</html>

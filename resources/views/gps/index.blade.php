<!-- resources/views/gps/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>GPS Data</title>
</head>
<body>
    <h1>GPS Data</h1>
    <a href="{{ route('gps.create') }}">Add New GPS Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Placa</th>
                <th>Suben</th>
                <th>Bajan</th>
                <th>Linea</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gpsData as $gps)
                <tr>
                    <td>{{ $gps->id }}</td>
                    <td>{{ $gps->latitude }}</td>
                    <td>{{ $gps->longitude }}</td>
                    <td>{{ $gps->placa }}</td>
                    <td>{{ $gps->suben }}</td>
                    <td>{{ $gps->bajan }}</td>
                    <td>{{ $gps->linea }}</td>
                    <td>
                        <a href="{{ route('gps.show', $gps->id) }}">View</a>
                        <a href="{{ route('gps.edit', $gps->id) }}">Edit</a>
                        <form action="{{ route('gps.destroy', $gps->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

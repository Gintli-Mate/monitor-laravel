<!-- resources/views/monitors/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitorok</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>Monitorok</h1>
    <a href="{{ route('monitors.create') }}">Új monitor hozzáadása</a>
    <table>
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Screen Size</th>
                <th>Resolution</th>
                <th>Refresh Rate</th>
                <th>Price</th>
                <th>Type</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitors as $monitor)
            <tr>
                <td>{{ $monitor->brand }}</td>
                <td>{{ $monitor->model }}</td>
                <td>{{ $monitor->screen_size }}</td>
                <td>{{ $monitor->resolution }}</td>
                <td>{{ $monitor->refresh_rate }}</td>
                <td>{{ $monitor->price }}</td>
                <td>{{ $monitor->type }}</td>
                <td>{{ $monitor->availability ? 'Available' : 'Unavailable' }}</td>
                <td>
                    <a href="{{ route('monitors.edit', $monitor) }}">Szerkesztés</a>
                    <form action="{{ route('monitors.destroy', $monitor) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

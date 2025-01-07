<!-- resources/views/monitors/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új monitor</title>
</head>
<body>
    <h1>Új monitor hozzáadása</h1>
    <form action="{{ route('monitors.store') }}" method="POST">
        @csrf
        <label for="brand">Brand:</label>
        <input type="text" name="brand" required><br>
        
        <label for="model">Model:</label>
        <input type="text" name="model" required><br>
        
        <label for="screen_size">Screen Size:</label>
        <input type="number" name="screen_size" step="0.1" required><br>
        
        <label for="resolution">Resolution:</label>
        <input type="text" name="resolution" required><br>
        
        <label for="refresh_rate">Refresh Rate:</label>
        <input type="number" name="refresh_rate" required><br>
        
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>
        
        <label for="type">Type:</label>
        <input type="text" name="type" required><br>
        
        <label for="availability">Availability:</label>
        <input type="checkbox" name="availability" value="1"><br>
        
        <button type="submit">Hozzáadás</button>
    </form>
</body>
</html>

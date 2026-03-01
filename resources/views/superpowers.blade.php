<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Superpoderes</title>
</head>
<body>
    
    <h1>Superpowers and abilities</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Power name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superpowers as $power)
            <tr>
                <td>{{ $power->id }}</td>
                <td>{{ $power->name }}</td>
                <td>{{ $power->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
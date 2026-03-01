<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Superhéroes</title>
</head>
<body>
    
    <h1>Superheroes List</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hero name</th>
                <th>Real Identity</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $hero)
            <tr>
                <td>{{ $hero->id }}</td>
                <td>{{ $hero->name }}</td>
                <td>{{ $hero->real_name }}</td>
                <td>{{ $hero->gender }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
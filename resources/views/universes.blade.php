<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Universos</title>
</head>
<body>
    
    <h1>Universes List</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe Name</th>
                <th>Company</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->universe }}</td>
                <td>{{ $universe->company }}</td>
                <td>{{ $universe->age }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
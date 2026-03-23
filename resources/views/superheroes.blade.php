<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superheroes List</title>
</head>
<body>
    
    <h1>Superheroes List</h1>

    <a href="/superheroes/create">Create New Superhero</a>
    <br><br>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hero Name</th>
                <th>Real Identity</th>
                <th>Gender</th>
                <th>Actions</th> </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $hero)
            <tr>
                <td>{{ $hero->id }}</td>
                <td>{{ $hero->name }}</td>
                <td>{{ $hero->real_name }}</td>
                <td>{{ $hero->gender }}</td>
                <td>
                    <a href="/superheroes/{{ $hero->id }}">View</a> | 
                    
                    <a href="/superheroes/{{ $hero->id }}/edit">Edit</a> | 
                    
                    <form action="/superheroes/{{ $hero->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this superhero?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
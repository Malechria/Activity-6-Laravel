<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universes List</title>
</head>
<body>
    
    <h1>Universes List</h1>
    
    <a href="/universes/create">Create New Universe</a>
    <br><br>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe Name</th>
                <th>Company</th>
                <th>Age</th>
                <th>Actions</th> </tr>
        </thead>
        <tbody>
            @foreach($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->universe }}</td>
                <td>{{ $universe->company }}</td>
                <td>{{ $universe->age }}</td>
                <td>
                    <a href="/universes/{{ $universe->id }}">View</a> | 
                    <a href="/universes/{{ $universe->id }}/edit">Edit</a> | 
                    <form action="/universes/{{ $universe->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this universe?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Create Superhero</title>
</head>
<body>
    
    <h1>Register new superhero</h1>
    
    <form action="/superheroes" method="POST">
        @csrf
        
        <label>Hero name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Real Identity:</label><br>
        <input type="text" name="real_name" required><br><br>

        <label>Gender:</label><br>
        <input type="text" name="gender" required><br><br>

        <label>Universe:</label><br>
        <select name="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->universe }} ({{ $universe->company }})</option>
            @endforeach
        </select><br><br>

        <button type="submit">Save Superhero</button>
    </form>

    <br>
    <a href="/superheroes">Go back to list</a>

</body>
</html>
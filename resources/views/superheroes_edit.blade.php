<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <form action="/superheroes/{{ $superhero->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Hero Name:</label><br>
        <input type="text" name="name" value="{{ $superhero->name }}" required><br><br>

        <label>Real Identity:</label><br>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}" required><br><br>

        <label>Gender:</label><br>
        <input type="text" name="gender" value="{{ $superhero->gender }}" required><br><br>

        <label>Universe:</label><br>
        <select name="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                    {{ $universe->universe }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update Superhero</button>
    </form>
    <br><a href="/superheroes">Cancel</a>
</body>
</html>
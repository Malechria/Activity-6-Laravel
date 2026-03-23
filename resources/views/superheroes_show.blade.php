<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero Details</title>
</head>
<body>
    <h1>Superhero Details</h1>
    <p><strong>Hero Name:</strong> {{ $superhero->name }}</p>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->universe }}</p>
    <br><a href="/superheroes">Go back to list</a>
</body>
</html>
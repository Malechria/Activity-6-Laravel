<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universe Details</title>
</head>
<body>
    
    <h1>Universe Details</h1>
    
    <p><strong>Universe Name:</strong> {{ $universe->universe }}</p>
    <p><strong>Company:</strong> {{ $universe->company }}</p>
    <p><strong>Age/Era:</strong> {{ $universe->age }}</p>

    <br>
    <a href="/universes">Go back to list</a>

</body>
</html>
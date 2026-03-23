<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Universe</title>
</head>
<body>
    
    <h1>Edit Universe</h1>
    
    <form action="/universes/{{ $universe->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Universe Name:</label><br>
        <input type="text" name="universe" value="{{ $universe->universe }}" required><br><br>

        <label>Company:</label><br>
        <input type="text" name="company" value="{{ $universe->company }}" required><br><br>

        <label>Age/Era:</label><br>
        <input type="text" name="age" value="{{ $universe->age }}" required><br><br>

        <button type="submit">Update Universe</button>
    </form>

    <br>
    <a href="/universes">Cancel and go back</a>

</body>
</html>
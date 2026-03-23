<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Universe</title>
</head>
<body>
    
    <h1>Register New Universe</h1>
    
    <form action="/universes" method="POST">
        @csrf
        
        <label>Universe Name:</label><br>
        <input type="text" name="universe" required><br><br>

        <label>Company:</label><br>
        <input type="text" name="company" required><br><br>

        <label>Age/Era:</label><br>
        <input type="text" name="age" required><br><br>

        <button type="submit">Save Universe</button>
    </form>

    <br>
    <a href="/universes">Go back to list</a>

</body>
</html>
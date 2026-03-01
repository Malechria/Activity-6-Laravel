# Activity 6 - Laravel Project

## Setup Instructions:
To ensure this project runs correctly in your local environment, follow these steps:

1. Create a database in XAMPP/phpMyAdmin named "superheroes_database".
2. Import the `base_de_datos_superheroes.sql` file (included in the root of this repository) into that database.
3. The ".env" file is already configured to connect to "superheroes_database" on port 3306 with the username `root` (it doesn't need a password).
4. Run the command `php artisan serve` in your terminal and visit the following routes in your browser:
   - /universes
   - /superheroes
   - /superpowers
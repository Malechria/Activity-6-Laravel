# Activity 6 - Laravel Project

## Setup Instructions for the Professor:
To ensure this project runs correctly in your local environment, please follow these steps:

1. Create a database in XAMPP/phpMyAdmin named `superheroes_db`.
2. Open your terminal in the project root and run the migrations:
   "php artisan migrate".
3. Execute the SQL "INSERT" statements provided in the "superheroes_database" file to populate the tables with data.
4. Run the command `php artisan serve` in your terminal and visit the following routes:
   - /universes
   - /superheroes
   - /superpowers
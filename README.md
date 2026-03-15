# Activity 6 & 7 - Laravel Project

## Setup Instructions for the Professor:
To ensure this project runs correctly in your local environment, please follow these steps:

1. Create a database in XAMPP/phpMyAdmin named "superheroes_database".
2. Open your terminal in the project root and run the database migrations:
   "php artisan migrate".
3. Execute the SQL "INSERT" statements provided in the "superheroes_database.sql" file to populate the tables with the initial data.
4. Run the command "php artisan serve" in your terminal.

---

## Activity 6 - Views and Data
Visit the following routes in your browser to see the HTML tables populated with the database records:
- /universes
- /superheroes
- /superpowers

---

## Activity 7 - Eloquent ORM (CRU Operations & Relationships)
Visit the following routes to verify the Create, Read, and Update operations, as well as the Eloquent model relationships. These routes return structured JSON data to explicitly demonstrate the database interactions:

- /actividad7/universe 

- `/actividad7/superhero` 

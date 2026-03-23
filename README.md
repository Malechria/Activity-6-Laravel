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

## Activity 8 CRUD Operations
Both **Universes** and **Superheroes** now have a complete CRUD implementation using the 7 standard RESTful methods:
1. **index**: Display the full list.
2. **create**: Form to register new records.
3. **store**: Securely save data to the database.
4. **show**: Display individual record details.
5. **edit**: Form to modify existing records.
6. **update**: Save changes to the database.
7. **destroy**: Remove records from the database.

### How to test:
* **Universes:** Visit `/universes`. From there, you can use the action buttons to Create, View, Edit, or Delete any record.
* **Superheroes:** Visit `/superheroes`. This view includes the fixed logic to retrieve all universes in the creation form, as requested. You can perform all 7 operations directly from the UI.

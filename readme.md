# Laravel Eloquent Many to Many relationships

A small project to demonstrate how to set up a many to many relationship in laravel

It uses 3 models

- **User:** A user can have many techniques and many combinations made from those techniques.
- **Combination:** A combination belongs to one user/owner and has many techniques. The techniques can be repeated.
- **Technique:** A technique belongs to one user/owner and has/can be used by many combinations.

4 tables are needed
- **users:** Serves as a place to store the users. In this case the most important part is the user's ID
- **combinations:** Stores information about a combination _but not_ which techniques the combination has
- **techniques:** Stores information about a technique _but not_ which combinations the technique belongs to
- **combination_technique:** A pivot table that stores references to which combinations use which techniques (and vice versa). These references are by IDs.

This is basically all this project does. It's just meant as a playground/reference for understanding the many to many relationship.


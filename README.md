# PHP Blog Project
A simple Blog Management System built using PHP and MySQL as part of the ApexPlanet Web Development Internship.

## Features
### CRUD Operations
* Create new blog posts
* Read and display blog posts
* Update existing blog posts
* Delete blog posts

### User Authentication
* User Registration
* User Login
* User Logout
* Password Hashing using `password_hash()`
* Password Verification using `password_verify()`
* Session Management for authenticated users

## Technologies Used
* PHP
* MySQL
* HTML
* Git
* GitHub
* VS Code

## Database Structure
### users
| Field    | Type              |
| -------- | ----------------- |
| id       | INT (Primary Key) |
| username | VARCHAR(50)       |
| password | VARCHAR(255)      |

### posts
| Field      | Type              |
| ---------- | ----------------- |
| id         | INT (Primary Key) |
| title      | VARCHAR(255)      |
| content    | TEXT              |
| created_at | TIMESTAMP         |

## Project Files
* `index.php` – Display all blog posts
* `create.php` – Create a new post
* `edit.php` – Update a post
* `delete.php` – Delete a post
* `register.php` – User registration
* `login.php` – User login
* `logout.php` – User logout
* `db.php` – Database connection

## Learning Outcomes
Through this project, I learned:

* PHP fundamentals
* MySQL database integration
* CRUD operations
* User authentication
* Password security and hashing
* Session management
* Git and GitHub workflow

## Author
Lasyavi Reddy

ApexPlanet Web Development Internship – Task 2

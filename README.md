# PHP MVC Project

A comprehensive, modern PHP application built from scratch using the Model-View-Controller (MVC) architectural pattern. This project serves as a complete administrative dashboard for managing various aspects of a website, including users, products, brands, news, and static pages. It features a secure authentication system, a dynamic and clean user interface, and a structured, easy-to-understand codebase.

✨ Features
MVC Architecture: A clean separation of concerns between business logic (Model), data presentation (View), and user input (Controller).

CRUD Functionality: Full Create, Read, Update, and Delete operations for multiple modules:

User Management: Handle user accounts and credentials.

Product Management: Manage a product catalog with pricing and brand associations.

Brand Management: Maintain a list of product brands.

News Management: Create, edit, and publish news articles.

Page Management: Control the content of static pages on the site.

Secure Authentication: A robust, session-based login system protects administrative areas. Passwords are securely hashed using PASSWORD_BCRYPT.

Dynamic UI: A modern, responsive user interface styled with custom CSS. Includes interactive elements like dropdowns, action cards, and styled forms.

Centralized Routing: A Router class handles all incoming requests, directing them to the appropriate controller and action, ensuring clean and predictable URLs.

Database Abstraction: A simple yet effective database class (MyDB) manages the connection and queries, making it easy to interact with the MySQL database.

🛠️ Technologies Used
Backend: PHP

Frontend: HTML5, CSS3

Database: MySQL

Architecture: MVC (Model-View-Controller)

📂 Project Structure
The project is organized into a logical and maintainable directory structure:

src/
├── classes/ # Core classes (Application, Router, Controller, etc.)
├── config/ # Configuration files (database, init)
├── controllers/ # Handles user input and interacts with Models/Views
├── css/ # Stylesheets
├── database/ # Model classes for database interaction
├── pages/ # View templates (.php files)
├── views/ # Layout files (header, footer)
└── index.php # Application entry point
⚙️ How It Works
The application follows a standard MVC request lifecycle:

Request Entry: All requests are directed to index.php.

Initialization: The Application class is instantiated, which initializes the database connection.

Routing: The Router class analyzes the URL (index.php?page=...&action=...) to determine which controller and method (action) to call.

Authentication Check: The Router checks if the user is authenticated before granting access to protected pages. If not, it redirects to the login page.

Controller Logic: The designated controller method is executed. It processes any user input and requests data from the corresponding Model.

Model Interaction: The Model interacts with the database to fetch or update data and returns it to the Controller.

View Rendering: The Controller passes the retrieved data to a View file. The PageView class then assembles the final HTML by combining the main template with the header and footer, and sends the response to the browser.

🚀 Setup and Installation
To run this project locally, follow these steps:

Clone the repository:

Bash

git clone <your-repository-url>
Database Setup:

Open src/database/MyDB.php and update the database credentials if necessary:

PHP

private $db_Database = "phpmvc_db";
private $db_Host = "localhost";
private $db_Username = "root";
private $db_Password = "";
Create a MySQL database named phpmvc_db.

Import the following SQL schema to set up the necessary tables:

SQL

--
-- Table structure for table `phpmvc_users`
--
CREATE TABLE `phpmvc_users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `phpmvc_brands`, `phpmvc_products`, etc.
-- You would add the CREATE TABLE statements for all other tables here.
--
(Note: You'll need to generate the CREATE TABLE statements for brands, products, news, pages, and sessions based on your database models.)

Create a default user:

To log in, you'll need at least one user. You can add one directly to the phpmvc_users table. Remember to use a hashed password.

Run the application:

Place the project files in your web server's root directory (e.g., htdocs for XAMPP).

Navigate to http://localhost/your-project-folder/src/ in your browser.

📖 Usage
Login: Access the application by visiting the root URL. You will be redirected to the login page if not authenticated.

Dashboard: After logging in, you are greeted with a dashboard containing quick-access cards to all major management sections.

CRUD Management: Click on any "Manage" card (e.g., "Manage Users") to view a table of all entries. From there, you can Add, Edit, or Delete records using the provided forms and links.

Settings: Navigate to the "Settings" page to customize application settings, such as the background color.

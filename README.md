# PHP MVC Project

A simple, well-structured PHP project that demonstrates the Model-View-Controller (MVC) architectural pattern. This project provides basic CMS-like functionality for managing users, brands, products, news, and static pages.

## About The Project

This project is built from scratch using pure PHP to showcase a clear and understandable implementation of the MVC pattern. It's a great starting point for anyone looking to understand how to structure a small PHP application without frameworks.

## Features

- MVC Architecture: Separates the application logic from the presentation, making the code easier to maintain and scale.
- Authentication: Secure user login and logout functionality with session management.
- CRUD Functionality: Create, Read, Update, and Delete operations for the following modules:
  - Users
  - Brands
  - Products
  - News
  - Pages
- Database Interaction: A simple and effective database layer using `mysqli`.
- Routing: A clean and simple routing system to handle page requests.
- Settings Management: Users can personalize their experience by changing the background color and saving their name and gender.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP 8.0 or higher
- MySQL or MariaDB
- A web server such as Apache or Nginx (or use PHP's built-in server for development)

### Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/eugegene/php-mvc-project.git
    ```

2. Database Setup:
   - Create a new database named `phpmvc_db` (or a name you prefer).
   - Import the `database.sql` file if it exists. If not present, create the necessary tables based on the models (users, brands, products, news, pages, sessions/settings). The project expects basic tables for those modules and a sessions/settings storage table if applicable.

3. Configuration:
   - Update the database credentials in `src/database/MyDB.php` if they are different from the defaults (often `root` with no password on a local environment).
   - If you use environment variables or another config file, make sure the application loads the correct credentials before starting.

4. Serve the application:
   - Using PHP built-in server for development:
     ```bash
     php -S localhost:8000 -t public
     ```
     (Adjust the document root path based on your project structure, e.g., `index.php` as entry point.)

## Project Structure

The project follows a standard MVC structure:

```markdown
.
└── src/
├── classes/    # Core classes (Application, Controller, Router, etc.)
├── config/     # Configuration files
├── controllers/# Controller classes
├── css/        # CSS stylesheets
├── database/   # Database models and connection class
├── pages/      # View files
├── views/
│   └── layout/ # Header and footer templates
└── index.php   # Entry point of the application
```

## How It Works

### MVC Architecture

- Model: The models are located in the `src/database/` directory. They are responsible for interacting with the database. Each database table has a corresponding model class (for example, `UserModel`, `ProductsModel`, etc.).
- View: The views are located in the `src/pages/` directory. They are responsible for the presentation layer of the application. The `PageView` class in `src/classes/` is used to render the views.
- Controller: The controllers are located in the `src/controllers/` directory. Controllers handle user requests, interact with the models to fetch/update data, and pass data to the views for rendering.

### Routing

The `Router` class (`src/classes/Router.php`) handles incoming requests. It determines the controller and action from the URL's query parameters (`page` and `action`). For example, a URL like `index.php?page=users&action=list` would route to the Users controller and its list action.

### Database

- MyDB: The `MyDB` class (`src/database/MyDB.php`) is a simple wrapper for the `mysqli` extension, providing methods for connecting to the database, executing queries, and escaping strings.
- Model: The `Model` class (`src/database/Model.php`) is an abstract class that other models extend. It provides a database connection to child model classes and common helper methods.

### Authentication

Authentication is handled by the `AuthController` (`src/controllers/AuthController.php`). It uses the `UserModel` to authenticate users and a session model or PHP sessions to create and validate user sessions. Passwords are hashed using `password_hash()`.

## Functionality in Detail

### User Management
- Controller: `UsersController`
- Model: `UserModel`
- Views: `src/pages/users/`
- Functionality: Adding, editing, and deleting users. Passwords are securely hashed using `password_hash()`.

### Brand Management
- Controller: `BrandsController`
- Model: `BrandsModel`
- Views: `src/pages/brands/`
- Functionality: Managing product brands.

### Product Management
- Controller: `ProductsController`
- Model: `ProductsModel`
- Views: `src/pages/products/`
- Functionality: Managing products, including name, brand, and price.

### News Management
- Controller: `NewsController`
- Model: `NewsModel`
- Views: `src/pages/news/`
- Functionality: Creating, editing, and deleting news articles.

### Page Management
- Controller: `PagesController`
- Model: `PagesModel`
- Views: `src/pages/pages/`
- Functionality: Managing static pages with title, keywords, description, H1, and content.

### Settings
- Controller: `SettingsController`
- View: `src/pages/settings.php`
- Functionality:
  - Users can change the background color of the site; this setting may be stored in the session.
  - Users can save their name and gender; these settings may be stored in cookies or the database depending on implementation.

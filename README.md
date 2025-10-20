# PHP MVC Project

A simple, well-structured PHP project that demonstrates the **Model-View-Controller (MVC)** architectural pattern. This project provides a basic CMS-like functionality for managing users, brands, products, news, and static pages.

## About The Project

This project is built from scratch using **pure PHP** to showcase a clear and understandable implementation of the MVC pattern. It's a great starting point for anyone looking to understand how to structure a web application in a clean and organized way. The application serves as a simple dashboard for managing various aspects of a website.

## Features

- **MVC Architecture**: Separates the application logic from the presentation, making the code easier to maintain and scale.
- **Authentication**: Secure user login and logout functionality with session management.
- **CRUD Functionality**: Create, Read, Update, and Delete operations for the following modules:
  - Users
  - Brands
  - Products
  - News
  - Pages
- **Database Interaction**: A simple and effective database layer using `mysqli`.
- **Routing**: A clean and simple routing system to handle page requests.
- **Settings Management**: Users can personalize their experience by changing the background color and saving their name and gender.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP 8.0 or higher
- MySQL or MariaDB

### Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/eugegene/php-mvc-project.git
    ```

2. **Database Setup**:
   - Create a new database named `phpmvc_db`.
   - Import the `database.sql` file (not provided, but you can create the tables based on the models) to set up the necessary tables. You'll need tables for users, brands, products, news, pages, and sessions.

3. **Configuration**:
   - Update the database credentials in `src/database/MyDB.php` if they are different from the defaults (root with no password).

## Project Structure

The project follows a standard MVC structure:

.
└── src/
├── classes/ # Core classes (Application, Controller, Router, etc.)
├── config/ # Configuration files
├── controllers/ # Controller classes
├── css/ # CSS stylesheets
├── database/ # Database models and connection class
├── pages/ # View files
├── views/
│ └── layout/ # Header and footer templates
└── index.php # Entry point of the application


## How It Works

### MVC Architecture

- **Model**: The models are located in the `src/database/` directory. They are responsible for interacting with the database. Each database table has a corresponding model class (e.g., `UserModel`, `ProductsModel`).
  
- **View**: The views are located in the `src/pages/` directory. They are responsible for the presentation layer of the application. The `PageView` class in `src/classes/` is used to render the views.

- **Controller**: The controllers are located in the `src/controllers/` directory. They handle user requests, interact with the models to fetch data, and then pass that data to the views for rendering.

### Routing

The `Router` class (`src/classes/Router.php`) handles incoming requests. It determines the controller and action from the URL's query parameters (`page` and `action`). For example, a URL like `index.php?page=users&action=create` will instantiate the `UsersController` and call the `action_create()` method.

### Database

- **MyDB**: The `MyDB` class (`src/database/MyDB.php`) is a simple wrapper for the `mysqli` extension, providing methods for connecting to the database, executing queries, and escaping strings.
- **Model**: The `Model` class (`src/database/Model.php`) is an abstract class that all other models extend. It provides a database connection to the child model classes.

### Authentication

Authentication is handled by the `AuthController` (`src/controllers/AuthController.php`). It uses the `UserModel` to authenticate users and the `SessionModel` to create and validate user sessions. A token is stored in a cookie to keep the user logged in.

## Functionality in Detail

### User Management
- **Controller**: `UsersController`
- **Model**: `UserModel`
- **Views**: `src/pages/users/`
- **Functionality**: Allows for adding, editing, and deleting users. Passwords are securely hashed using `password_hash()`.

### Brand Management
- **Controller**: `BrandsController`
- **Model**: `BrandsModel`
- **Views**: `src/pages/brands/`
- **Functionality**: Allows for managing product brands.

### Product Management
- **Controller**: `ProductsController`
- **Model**: `ProductsModel`
- **Views**: `src/pages/products/`
- **Functionality**: Allows for managing products, including their name, brand, and price.

### News Management
- **Controller**: `NewsController`
- **Model**: `NewsModel`
- **Views**: `src/pages/news/`
- **Functionality**: Allows for creating, editing, and deleting news articles.

### Page Management
- **Controller**: `PagesController`
- **Model**: `PagesModel`
- **Views**: `src/pages/pages/`
- **Functionality**: Allows for managing static pages with a title, keywords, description, H1, and content.

### Settings
- **Controller**: `SettingsController`
- **View**: `src/pages/settings.php`
- **Functionality**:
  - Users can change the background color of the site. This setting is stored in the session.
  - Users can save their name and gender. These settings are stored in cookies.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated!

1. **Fork the Project**
2. **Create your Feature Branch**:
   ```bash
   git checkout -b feature/AmazingFeature


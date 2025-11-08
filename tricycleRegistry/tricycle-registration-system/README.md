# Tricycle Registration System

This project is a web application for registering tricycle drivers. It consists of a backend built with PHP and a frontend built with JavaScript. The application connects to a XAMPP server for database management.

## Project Structure

```
tricycle-registration-system
├── backend
│   ├── public
│   │   └── index.php
│   ├── src
│   │   ├── controllers
│   │   │   └── DriverController.php
│   │   ├── models
│   │   │   └── Driver.php
│   │   ├── routes
│   │   │   └── api.php
│   │   └── config
│   │       └── database.php
│   ├── composer.json
│   └── .env.example
├── frontend
│   ├── public
│   │   └── index.html
│   ├── src
│   │   ├── app.js
│   │   └── components
│   │       └── DriverForm.js
│   └── package.json
├── database
│   ├── schema.sql
│   └── seeds.sql
├── docs
│   └── api.md
├── .gitignore
└── README.md
```

## Setup Instructions

1. **Clone the repository**:
   ```
   git clone <repository-url>
   ```

2. **Set up the backend**:
   - Navigate to the `backend` directory.
   - Install dependencies using Composer:
     ```
     composer install
     ```
   - Configure the database connection in the `.env` file based on the `.env.example`.

3. **Set up the frontend**:
   - Navigate to the `frontend` directory.
   - Install dependencies using npm:
     ```
     npm install
     ```

4. **Database Setup**:
   - Import the `schema.sql` file into your XAMPP MySQL database to create the necessary tables.
   - Optionally, run the `seeds.sql` file to populate the database with initial data.

5. **Run the Application**:
   - Start the XAMPP server and ensure Apache and MySQL are running.
   - Access the backend at `http://localhost/tricycle-registration-system/backend/public/index.php`.
   - Access the frontend at `http://localhost/tricycle-registration-system/frontend/public/index.html`.

## Usage Guidelines

- The application allows you to register, update, retrieve, and delete tricycle driver records.
- Use the frontend interface to interact with the backend API.

## Documentation

For detailed API documentation, refer to the `docs/api.md` file.
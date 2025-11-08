# Tricycle Registration Dashboard

This project is a Tricycle Registration System that allows for the management of tricycle drivers, including registration, updates, and data retrieval. It consists of a backend API built with PHP and a frontend application built with JavaScript.

## Project Structure

```
tricycle-registration-dashboard
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
│   │   ├── pages
│   │   │   ├── Dashboard.js
│   │   │   └── Login.js
│   │   └── components
│   │       ├── DriverForm.js
│   │       ├── DriverTable.js
│   │       └── StatsCard.js
│   ├── styles
│   │   └── main.css
│   └── package.json
├── database
│   ├── schema.sql
│   └── seeds.sql
├── docs
│   └── api.md
└── README.md
```

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the backend directory and install dependencies:
   ```
   cd backend
   composer install
   ```

3. Set up the environment variables:
   - Copy `.env.example` to `.env` and update the database credentials.

4. Create the database and run the schema:
   ```
   mysql -u <username> -p < database/schema.sql
   ```

5. Seed the database with initial data:
   ```
   mysql -u <username> -p < database/seeds.sql
   ```

6. Start the backend server using XAMPP or any preferred method.

7. Navigate to the frontend directory and install dependencies:
   ```
   cd frontend
   npm install
   ```

8. Start the frontend application:
   ```
   npm start
   ```

## Usage

- Access the frontend application at `http://localhost:<frontend-port>/`.
- Use the login page to authenticate and access the dashboard.
- The dashboard displays statistics and allows for managing driver information.

## API Documentation

Refer to `docs/api.md` for detailed information on the API endpoints, including request and response formats.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.
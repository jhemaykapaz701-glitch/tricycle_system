# API Documentation for Tricycle Registration System

## Overview
This document provides an overview of the API endpoints available in the Tricycle Registration System. The API allows for the management of tricycle driver records, including creating, retrieving, updating, and deleting driver information.

## Base URL
The base URL for the API is:
```
http://localhost/tricycle-registration-system/backend/public/
```

## Endpoints

### 1. Create Driver
- **Endpoint:** `/api/drivers`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
    "name": "string",
    "licenseNumber": "string"
  }
  ```
- **Response:**
  - **201 Created**
    ```json
    {
      "id": "integer",
      "name": "string",
      "licenseNumber": "string"
    }
    ```
  - **400 Bad Request**
    ```json
    {
      "error": "string"
    }
    ```

### 2. Get Drivers
- **Endpoint:** `/api/drivers`
- **Method:** `GET`
- **Response:**
  - **200 OK**
    ```json
    [
      {
        "id": "integer",
        "name": "string",
        "licenseNumber": "string"
      }
    ]
    ```

### 3. Update Driver
- **Endpoint:** `/api/drivers/{id}`
- **Method:** `PUT`
- **Request Body:**
  ```json
  {
    "name": "string",
    "licenseNumber": "string"
  }
  ```
- **Response:**
  - **200 OK**
    ```json
    {
      "id": "integer",
      "name": "string",
      "licenseNumber": "string"
    }
    ```
  - **404 Not Found**
    ```json
    {
      "error": "string"
    }
    ```

### 4. Delete Driver
- **Endpoint:** `/api/drivers/{id}`
- **Method:** `DELETE`
- **Response:**
  - **204 No Content**
  - **404 Not Found**
    ```json
    {
      "error": "string"
    }
    ```

## Error Handling
All error responses will include an error message detailing the issue encountered.

## Conclusion
This API provides a simple interface for managing tricycle driver records. Ensure to handle requests and responses according to the formats specified above.
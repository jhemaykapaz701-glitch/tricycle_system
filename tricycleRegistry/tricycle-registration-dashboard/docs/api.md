# API Documentation for Tricycle Registration System

## Overview
This document provides an overview of the API endpoints available in the Tricycle Registration System. The API allows for CRUD operations on driver data.

## Base URL
```
http://localhost/tricycle-registration-dashboard/backend/public/
```

## Endpoints

### 1. Create Driver
- **URL**: `/api/drivers`
- **Method**: `POST`
- **Request Body**:
  ```json
  {
    "name": "string",
    "licenseNumber": "string"
  }
  ```
- **Response**:
  - **201 Created**: Driver successfully created.
  - **400 Bad Request**: Invalid input.

### 2. Get All Drivers
- **URL**: `/api/drivers`
- **Method**: `GET`
- **Response**:
  - **200 OK**: Returns a list of drivers.
  ```json
  [
    {
      "id": "integer",
      "name": "string",
      "licenseNumber": "string"
    }
  ]
  ```

### 3. Get Driver by ID
- **URL**: `/api/drivers/{id}`
- **Method**: `GET`
- **Response**:
  - **200 OK**: Returns the driver details.
  ```json
  {
    "id": "integer",
    "name": "string",
    "licenseNumber": "string"
  }
  ```
  - **404 Not Found**: Driver not found.

### 4. Update Driver
- **URL**: `/api/drivers/{id}`
- **Method**: `PUT`
- **Request Body**:
  ```json
  {
    "name": "string",
    "licenseNumber": "string"
  }
  ```
- **Response**:
  - **200 OK**: Driver successfully updated.
  - **400 Bad Request**: Invalid input.
  - **404 Not Found**: Driver not found.

### 5. Delete Driver
- **URL**: `/api/drivers/{id}`
- **Method**: `DELETE`
- **Response**:
  - **204 No Content**: Driver successfully deleted.
  - **404 Not Found**: Driver not found.

## Error Handling
All responses will include an error message in the following format:
```json
{
  "error": "Error message"
}
```

## Authentication
Currently, the API does not implement authentication. Future versions may include token-based authentication for secure access.

## Conclusion
This API provides a simple interface for managing driver information in the Tricycle Registration System. For further details, please refer to the source code and implementation in the backend.
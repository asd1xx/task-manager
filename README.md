### linter status:
[![Maintainability](https://api.codeclimate.com/v1/badges/3552e49e49357ed47b97/maintainability)](https://codeclimate.com/github/asd1xx/task-manager/maintainability)

# Task manager

## About the project

The system has users, each of whom can create, view, update and delete their tasks.  
The system supports the following actions:
- View a list of all user tasks.
- Create a new task.
- View task information.
- Editing a task.
- Deleting a task.
- Mark a task as completed.

## System requirements

- Composer 2.6.6
- Docker 25.0.3

## Installation instructions

Perform the following steps in sequence:

1. Clone the repository:
    
    ```bash
    git@github.com:asd1xx/task-manager.git task-manager
    ```
    
2. Go to the project directory:
    
    ```bash
    cd task-manager
    ```
    
3. Installing dependencies:
    
    ```bash
    composer install
    ```
    
4. Assemble the project:
    
    ```bash
    docker-compose build
    ```
5. Start a project:
    
    ```bash
    docker-compose up -d 
    ```
6. Stop the project:
    
    ```bash
    docker-compose down
    ```

## API Documentation

https://github.com/asd1xx/task-manager/blob/main/api-documentation.md

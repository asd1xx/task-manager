## Basic information

Author: Viacheslav Evseev.  
Task: Implement a task manager where each user can create, view, update and delete their tasks.

## Routes

### /register
User registration  
method: POST

### /login
User authorization  
method: POST

### /logout
User logout  
method: POST

### /task
Authorized user tasks  
method: GET

### /task/new
Create a new task  
method: POST

### /task/{id}
View task information  
method: GET

### /task/{id}/edit
Editing a task  
method: PUT

### /task/{id}
Deleting a task   
method: DELETE

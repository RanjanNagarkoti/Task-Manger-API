Task Manager API
This is a Task Manager API that allows users to create and manage tasks, categories, and priority levels. The API is built using Laravel, and follows RESTful principles.

Features
Users can create an account and log in
Users can create tasks, edit tasks, and delete tasks
Users can mark tasks as completed or incomplete
Tasks can have categories and priority levels
Implements CRUD (Create, Read, Update, Delete) operations for tasks and categories
Uses authentication to restrict access to certain routes
Uses middleware to validate incoming data and handle errors
Uses Eloquent ORM to interact with the database
Uses Postman or a similar tool to test the API
Installation
To install and run the project locally, follow these steps:

Clone the repository and navigate to the project directory.
Run composer install to install the project dependencies.
Copy the .env.example file to .env and set up your database configuration.
Run php artisan key:generate to generate a new application key.
Run php artisan migrate to create the necessary database tables.
Start the local development server by running php artisan serve.
API Routes
The following API routes are available:

Authentication
POST /api/register - Register a new user account
POST /api/login - Log in to an existing user account

Tasks
GET /api/tasks - List all tasks
POST /api/tasks - Create a new task
GET /api/tasks/{id} - Retrieve a single task by ID
PUT /api/tasks/{id} - Update a task by ID
DELETE /api/tasks/{id} - Delete a task by ID
PUT /api/tasks/{id}/complete - Mark a task as complete
PUT /api/tasks/{id}/incomplete - Mark a task as incomplete

Categories
GET /api/categories - List all categories
POST /api/categories - Create a new category
GET /api/categories/{id} - Retrieve a single category by ID
PUT /api/categories/{id} - Update a category by ID
DELETE /api/categories/{id} - Delete a category by ID

Testing
To test the API endpoints, you can use a tool like Postman or a similar API testing tool. The tests directory contains PHPUnit tests that can be run using the php artisan test command.

Contributing
If you find any bugs or issues with the API, feel free to open an issue or submit a pull request. Contributions are always welcome!

License
This project is licensed under the MIT License.
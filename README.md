# Todo API

## Overview
The Todo API is a RESTful web service for managing a simple to-do list. It allows users to create, read, update, and delete tasks in an efficient and easy-to-use way.

## Features
- Create new tasks
- Retrieve a list of tasks
- Update existing tasks
- Delete tasks

## Technologies Used
- Laravel
- MySQL
- Git

## Getting Started

### Prerequisites
- PHP >= 7.3
- Composer
- Docker
- MySQL
- Laravel

## Automatic docker environment
`docker-compose up -d`

### Installation
1. Clone the repository:
`git clone https://github.com/samuelazvedo/api-tips.git`

2. Navigate to the project directory:
`cd .\api-tips\api`

3. Install the dependencies:
`composer install`

4. Configure your environment variables:
- Copy `.env.example` to `.env`
- Update the database configuration and others in `.env`
- Use `DB_USERNAME=root` and `DB_PASSWORD=admin` if you are using docker recommendation to Start MySQL Container

5. Generate the application key:
`php artisan key:generate`

6. Run the migrations:
`php artisan migrate`

7. Start the server:
`php artisan serve`


## API Endpoints

| Method | Endpoint          | Description             |
| ------ | ----------------- | ----------------------- |
| POST   | /api/tasks        | Create a new task       |
| GET    | /api/tasks        | Retrieve all tasks      |
| GET    | /api/tasks/{id}   | Retrieve a single task  |
| PUT    | /api/tasks/{id}   | Update an existing task |
| DELETE | /api/tasks/{id}   | Delete a task           |

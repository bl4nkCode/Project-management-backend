# Task & Project Manager — Backend API

A RESTful API for managing projects and tasks, built with Laravel and MySQL. Handles user authentication, project/task CRUD, search, filtering, and pagination.

Built as a practice project to strengthen backend API design and authentication patterns, paired with a separate React frontend.

## Features

- 🔐 Secure user registration & login via **Laravel Sanctum**
- 📁 Full CRUD for projects and tasks (create, update, delete, mark complete)
- 🔍 Search, filtering, and pagination on task/project listings
- 📅 Task status tracking and deadlines
- 🛠️ RESTful API design following Laravel conventions

## Tech Stack

- **Framework:** Laravel 12/13
- **Database:** MySQL
- **Auth:** Laravel Sanctum (token-based API authentication)
- **Local environment:** Laragon

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- MySQL
- Laragon (or any local PHP/MySQL environment)

### Setup

```bash
git clone https://github.com/bl4nkCode/Project-management-backend.git
cd Project-management-backend
composer install
cp .env.example .env
php artisan key:generate
```

Update your `.env` with your local MySQL database credentials, then:

```bash
php artisan migrate
php artisan serve
```

The API will be available at `http://localhost:8000`.

## API Overview

| Method | Endpoint            | Description                |
|--------|----------------------|-----------------------------|
| POST   | `/api/register`      | Register a new user         |
| POST   | `/api/login`         | Log in and receive a token  |
| GET    | `/api/projects`      | List projects (paginated)   |
| POST   | `/api/projects`      | Create a new project        |
| GET    | `/api/tasks`         | List tasks (search/filter)  |
| POST   | `/api/tasks`         | Create a new task           |
| PUT    | `/api/tasks/{id}`    | Update a task                |
| DELETE | `/api/tasks/{id}`    | Delete a task                |

*(Update this table with your actual routes — check `routes/api.php`.)*

## Related Repo

Frontend (React + TailwindCSS): [Project-management-frontend](https://github.com/bl4nkCode/Project-management-frontend)

## Status

Practice project — actively developed locally.

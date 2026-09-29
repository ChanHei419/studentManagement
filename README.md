# Student Management System

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?logo=php&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-templates-FF2D20)
![Tailwind](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-6-646CFF?logo=vite&logoColor=white)

A full-stack **Student Management System** built with **Laravel 12** — demonstrating MVC architecture, Eloquent ORM, database migrations, seeders, factories, soft deletes, validation, search, and pagination.

> Built by **HeiChan (Chan Hei Lun)** as a hands-on full-stack engineering project.

---

## Features

### Countries module (complete CRUD)
- Browse countries with **server-side search** (name or ISO code) and **pagination**
- Create and edit records with **request validation** (`required`, `max` length)
- Delete with **route-model binding** and confirmation
- Seeded with **200+ countries** via `CountriesSeeder`

### Students module
- Eloquent model with **soft deletes** (`SoftDeletes` trait)
- Migrations covering name, email, age, date of birth, gender, and user ownership
- Factory support for test / seed data generation

### Teachers module
- Basic CRUD demonstrating **Eloquent model operations** (`findOrFail`, `save`, `update`, `delete`)

## Tech Stack

| Layer      | Technology                                  |
| ---------- | ------------------------------------------- |
| Framework  | Laravel 12 (PHP 8.2)                        |
| Database   | SQLite (default) / MySQL compatible         |
| Front end  | Blade templates + Tailwind CSS 4 (Vite 6)   |
| Testing    | PHPUnit 11                                  |
| Tooling    | Composer, NPM, Laravel Pint, Laravel Pail   |

## Concepts Demonstrated

- **Routing:** grouped, prefixed, and named routes; redirects
- **Controllers:** resource-style, request injection, validation, redirects with flash messages
- **Eloquent ORM:** models, soft deletes, `findOrFail`, query scopes via `when()`
- **Database:** migrations, seeders, factories, timestamps
- **Blade:** layouts with `@yield` / `@section`, components, pagination views
- **Security:** CSRF protection on forms, `@method('DELETE')` spoofing, validation

## Project Structure

```
app/
├── Http/Controllers/
│   ├── CountriesController.php   # Full CRUD + search + pagination
│   ├── StudentController.php     # Eloquent/DB demos
│   └── TeachersController.php    # Model CRUD
└── Models/
    ├── Countries.php
    ├── Student.php               # Uses SoftDeletes + HasFactory
    ├── Teachers.php
    └── User.php

database/
├── migrations/                   # students, teachers, countries, users, soft deletes
├── seeders/                      # CountriesSeeder (200+ records)
└── factories/                    # UserFactory, StudentFactory

resources/views/
├── layouts/app.blade.php         # Shared Bootstrap layout
└── countries/                    # index (search + pagination), add, edit
```

## Getting Started

```bash
# 1. Install PHP dependencies
composer install

# 2. Configure environment
cp .env.example .env
php artisan key:generate

# 3. Run migrations and seed countries
php artisan migrate --seed

# 4. Install front-end dependencies
npm install

# 5. Start the dev servers
npm run dev            # Vite
php artisan serve      # http://127.0.0.1:8000
```

Then open <http://127.0.0.1:8000/countries> to use the CRUD module.

## Notes

This repository is a learning-focused project — some controllers intentionally keep small demo endpoints (e.g., quick Eloquent/DB experiments) alongside the fully featured Countries module.

## Contact

- GitHub: [@ChanHei419](https://github.com/ChanHei419)
- Email: cccheilllun4129@gmail.com

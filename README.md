# Portal

## 🔎 Overview

Portal is a web application for easy management of workers, projects and permissions in skyvar.

## 💻 Technologies Used

-   **Backend:** Laravel
-   **Frontend:** Laravel with Filament
-   **DB:** Postgresql

## ✨ Features
(It is recommended to update after additions)

-   **Request CRUD for worker and project:** Create, read, update and delete of request to a worker or a project.
-   **Responsive Design:** A seamless experience across various devices.

## 🔧 Installation

### Clone

```bash
# Install Dependencies
composer install

# Generate APP_KEY variable
php artisan key:generate

# Run Migrations and Seed the Database
php artisan migrate --seed

# Install the Filament Panel Builder
composer require filament/filament:"^3.2" -W
php artisan filament:install --panels

```

### Every pull

```bash
# Install Dependencies
composer install

# Run Migrations and Seed the Database
php artisan migrate --seed

```
## 🌐 User Account

### Create a user account

```bash
# Create a user and fill the details
php artisan make:filament-user

```
## 🚀 Running

### Run the application

```bash
# Run the server
php artisan serve --host 0.0.0.0 --port 8000

```

Your app will be accessible at http://localhost:8000.

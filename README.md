# Laravel Project Setup Guide

This guide will walk you through the steps to set up a Laravel environment after pulling the project from a GitHub repository.

## Prerequisites

Before you begin, make sure you have the following installed on your machine:

- **PHP** (>= 8.0)
- **Composer** (Dependency Manager for PHP)
- **Node.js** and **NPM** (for frontend asset management)
- **SQLite** (or MySQL/PostgreSQL if specified by the project)
- **Git** (to clone the repository)
- A web server (such as Apache, Nginx, or you can use Laravel's built-in server)

## Steps to Set Up the Laravel Project

### 1. Clone the Repository

First, clone the repository to your local machine using Git:

```bash
git clone https://github.com/your-username/your-repository.git
```

### 2. Navigate to the Project Directory

Go to the project directory:

```bash
cd your-repository
```

### 3. Install Dependencies

Laravel uses Composer to manage its PHP dependencies. Run the following command to install all dependencies:

```bash
composer install
```

### 4. Create the .env File
Laravel uses an environment file (.env) to manage environment-specific settings, such as database credentials.

Copy the example .env file:

```bash
cp .env.example .env
```

### 5. Generate an Application Key
The application key is used for encryption and should be generated for your application:

```bash
php artisan key:generate
```

### 5. Generate an Application Key
The application key is used for encryption and should be generated for your application:

```bash
php artisan key:generate
```

### 6. Configure the Environment Variables
Edit the .env file to configure your environment. You’ll need to configure settings such as:

- APP_URL: The URL where your Laravel app will be served.
- DB_CONNECTION: Set to sqlite, mysql, or pgsql depending on your database.
- DB_DATABASE: Set this to the path of your SQLite file or your MySQL/PostgreSQL database name.

Example configuration for SQLite:

```env
DB_CONNECTION=sqlite
```

For MySQL or other databases, configure the relevant fields like:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 7. Set Up the Database (Optional)
- For SQLite: Ensure the SQLite file exists by creating an empty file if necessary:

```bash
touch database/database.sqlite
```

- For MySQL/PostgreSQL: Ensure you have created the database with the same name specified in your .env file.

### 8. Run Database Migrations
After configuring your database, run the following command to execute database migrations and set up the necessary tables:

```bash
php artisan migrate
```

If your project has seeders (to insert sample data), you can also run:

```bash
php artisan db:seed
```

### 9. Install Node.js Dependencies (Optional)
If your Laravel project uses frontend tooling (e.g., for compiling assets with Laravel Mix), you'll need to install JavaScript dependencies using npm:

```bash
php artisan db:seed
```

```bash
npm install
```

### 10. Compile Frontend Assets (Optional)
If the project uses Laravel Mix, run the following to compile CSS, JavaScript, and other assets:

```bash
npm run dev
```

For production assets, use:
```bash
npm run prod
```

### 11. Start the Development Server
You can serve the application using Laravel's built-in development server:

```bash
php artisan serve
```

By default, the application will be available at http://127.0.0.1:8000. Visit that URL in your browser.

### 12. Additional Setup (if applicable)
Some Laravel projects might have additional setup steps, such as:

- Configuring Horizon, Queues, or Redis for background jobs.

- Setting up Storage Links for file uploads:

```bash
php artisan storage:link
```

- Caching Configs for better performance (optional, not needed in local dev):

```bash
php artisan config:cache
```

## Common Issues
### 1. Missing PHP Extensions
If you get errors related to missing extensions (such as pdo_sqlite or pdo_mysql), you’ll need to enable the necessary extensions in your php.ini file.

### 2. Permissions Issues
You may encounter permission issues when writing to files or directories (like storage or bootstrap/cache). Ensure these directories are writable:

```bash
sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache
```

---

If you encounter any issues, feel free to check the Laravel documentation at https://laravel.com/docs.
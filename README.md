# User Authentication App using Laravel

This is a user authentication app built using the Laravel framework. It utilizes Laravel Sanctum for API authentication and follows the principles of Test-Driven Development (TDD) to ensure robust and reliable code.

## Features

-   User registration: Allows users to create new accounts by providing necessary information such as name, email, and password.
-   User login: Allows existing users to log in using their registered email and password.
-   User logout: Provides a mechanism for users to securely log out of their accounts.
-   Password reset: Enables users to reset their forgotten passwords by sending them a password reset link via email.

## Requirements

To run this application, you'll need to have the following installed on your system:

-   PHP 7.4 or higher
-   Composer
-   Laravel 8.x
-   Laravel Sanctum
-   PHPUnit (for running tests)

## Installation

-   Clone this repository to your local machine:
-   cd user-authentication-app
-   composer install
-   cp .env.example .env
-   php artisan key:generate
-   php artisan migrate
-   php artisan sanctum:install
-   php artisan serve
-   php artisan test

Remember to replace `<repository_url>` with the actual URL of your repository.

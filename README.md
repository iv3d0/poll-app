# Poll App

This is a simple polling web application built with Laravel 10, Livewire, and TailwindCSS. Users can create and vote on polls with multiple options.

## Built With

-   [Laravel 10](https://laravel.com)
-   [Livewire 3](https://laravel-livewire.com/)
-   [Tailwind CSS 3](https://tailwindcss.com/)

## Features

-   Create polls with title and multiple options
-   Vote on existing polls
-   View poll results live after voting
-   Polls are public and do not require authentication
-   Responsive design with TailwindCSS

## Installation

1. Clone the repository

```bash
git clone https://github.com/iv3d0/poll-app.git
```

2. Install Composer dependencies

```bash
composer install
```

3. Install NPM dependencies

```bash
npm install
```

4. Build assets

```bash
npm run dev
```

5. Configure environment variables in `.env` file

6. Run database migrations

```bash
php artisan migrate
```

7. Serve application locally

```bash
php artisan serve
```

## Usage

-   Browse existing polls and vote
-   Create a new poll with title and options
-   Polls do not require authentication
-   After voting, poll results update live using Livewire

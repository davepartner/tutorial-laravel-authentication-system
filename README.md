# Tutorial Laravel Authentication System

A Laravel-based authentication starter project with an enhanced admin dashboard experience.

This repository includes standard Laravel Breeze authentication pages and a redesigned, ERP-style dashboard UI with chart-driven widgets and operational panels.

## Features

- Laravel authentication flow (register, login, logout, password reset)
- Profile management and password update pages
- ERP-inspired dashboard layout with:
  - KPI cards
  - Line, bar, and doughnut charts (Chart.js)
  - Status, todo, and operational request widgets
  - Left vertical navigation sidebar
- Tailwind CSS + Bootstrap integration for UI styling

## Tech Stack

- Backend: `PHP`, `Laravel`
- Frontend: `Blade`, `Tailwind CSS`, `Bootstrap`, `Alpine.js`, `Chart.js`
- Build tool: `Vite`
- Database: `MySQL` (or any Laravel-supported database)

## Prerequisites

Before running the project, ensure you have:

- `PHP` (recommended: 8.2+)
- `Composer`
- `Node.js` and `npm`
- A configured database server

## Installation

1. Clone the repository:

```bash
git clone https://github.com/davepartner/tutorial-laravel-authentication-system.git
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install frontend dependencies:

```bash
npm install
```

4. Create your environment file:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Configure your database in `.env`, then run migrations:

```bash
php artisan migrate
```

## Running Locally

Start Laravel server:

```bash
php artisan serve
```

Start Vite dev server (new terminal):

```bash
npm run dev
```

Open the app at `http://127.0.0.1:8000`.

## Authentication Routes

Main auth routes are defined in:

- `routes/auth.php`

Dashboard route is defined in:

- `routes/web.php`

## Testing

Run backend tests:

```bash
php artisan test
```

## Build for Production

```bash
npm run build
```

## Project Structure (Key Paths)

- `app/` - Laravel application logic
- `resources/views/` - Blade templates
- `resources/views/dashboard.blade.php` - Custom ERP-style dashboard
- `resources/css/app.css` - App styles and framework imports
- `resources/js/app.js` - Frontend bootstrapping and Chart.js import
- `routes/` - Application route definitions

## Troubleshooting

- If assets do not update, restart `npm run dev`.
- If database errors occur, verify `.env` database credentials.
- If chart widgets do not appear, ensure frontend assets are built and loaded.

## Contributing

Contributions are welcome.

1. Create a feature branch.
2. Make focused, tested changes.
3. Open a pull request with a clear description.

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

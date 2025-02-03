<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel ToDo List Practice

This is a practice project implementing a ToDo List application using Laravel and React.

## Project Setup Steps

### 1. Create Laravel Project
```bash
composer create-project laravel/laravel your-project-name
cd your-project-name
```

### 2. Install React Dependencies
```bash
composer require laravel/ui
php artisan ui react --auth
```

### 3. Build Assets
```bash
npm install
npm run dev
```

## Project Features
- Laravel backend API
- React frontend
- User authentication
- ToDo list management

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

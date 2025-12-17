# Laravel Social Media App

A Facebook-like social media application built with Laravel 12 for beginners and intermediate developers to learn modern web development.

## About This Project

This social media platform includes core features similar to Facebook:

- **User Posts** - Create, edit, and share posts with images
- **Social Feed** - Browse and interact with posts from other users
- **File Uploads** - Share images and media content
- **Search** - Find posts and content across the platform

## What You Will Learn

Building this social media app teaches you essential Laravel concepts:

- **MVC Architecture** - Models, Views, Controllers structure
- **Database Relationships** - User posts, categories, and social connections
- **Authentication** - User registration, login, and sessions
- **File Handling** - Image uploads and media management
- **Frontend Integration** - Blade templates with TailwindCSS and Flowbite
- **Modern Development** - Vite for asset building, real-time features
- **Code Quality** - Laravel Pint for code formatting, Debugbar for debugging


## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm
- SQLite (included) or MySQL/PostgreSQL

## Quick Setup

1. **Clone and install dependencies**
   ```bash
   git clone https://github.com/sediqzada94/laravel-social-media.git
   cd laravel-social-media
   composer install
   npm install
   ```

2. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

4. **Start development**
   ```bash
   composer run dev
   ```
   This starts Laravel server, queue worker, and Vite dev server together.

## Development Commands

- `composer run dev` - Start all development servers
- `php artisan migrate` - Run database migrations
- `npm run build` - Build assets for production

## Features Built

- **Post Management** - Create, edit, delete posts with rich content
- **Image Sharing** - Upload and display images in posts
- **Social Feed** - Timeline view of all user posts
- **Categories** - Tag posts with different topics
- **Status System** - Draft, published, cancelled post states
- **Search** - Find posts by title and content
- **Responsive Design** - Mobile-friendly interface

## Project Structure

```
app/
├── Http/Controllers/    # Handle user requests (posts, feed, auth)
├── Models/             # Database models (User, Post, Category)
├── Observers/          # Model event observers
└── Providers/          # Service providers

resources/
└── views/              # Blade templates (feed, posts, profiles)
database/
├── migrations/         # Database schema (users, posts, categories)
└── seeders/           # Sample social media data
```

## Learning Path

1. **User Authentication** - Understand login and registration
2. **Post Models** - Learn social media data relationships
3. **Feed Controllers** - See how social feeds work
4. **Blade Views** - Build social media UI components
5. **File Uploads** - Handle image sharing features
6. **Database Design** - Study social media database structure

## Tools Included

- **Laravel Debugbar** - Debug queries and performance
- **Laravel Pint** - Code formatting
- **TailwindCSS** - Utility-first CSS
- **Flowbite** - UI components

## Getting Help

- [Laravel Documentation](https://laravel.com/docs)

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

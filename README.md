<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About a project

Simple Twitter clone system, complete with MySQL database, PHP API and HTML form to add and edit entities (w/o TDD).

Data structure
1. Tweet entity with at least body and optional avatar fields.
2. User entity with name with at least name, description and optional avatar fields.
3. Tweets can be liked, disliked.
4. Users can be followed (and unfollowed) by other users.

API Endpoints
1. Get a list of all users.
2. Get relevant posts (show your tweets, tweets liked/disliked by you from users you follow).
3. Get a profile page for a given user.
4. Get notifications (when you've been mentioned '@' in a tweet).

## How to navigate a project

To visit tweets page ('/tweets'), you have to be logged in (registration required).

To login/register, look up to top right corner (or center) of a website (at '/' route) or manually visit '/login' or '/register'.

From a main route '/tweets' you can visit specific routes through hyperlinks:
- explore all users,
- visit and edit your profile,
- visit your notifications page,
- add/edit/delete your tweets,
- follow or unfollow other users,
- like or dislike tweets.

## How to setup a Laravel project from github repository

1. Download .zip file from a given github repository.
2. Unpack .zip file and move terminal working location to the project folder.
3. Run commands:
composer install
npm install && npm run dev
4. Copy .env.example file and rename it to .env file (projects' main folder).
5. Generate an app encryption key:
php artisan key:generate
(it should update an APP_KEY value in you .env file) 
6. Create an empty database for a project (recommended coalition: utfmb4_unicode_ci).
7. Add database information in .env file:
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
8. Migrate the database:
php artisan migrate
(it will create all necessary tables to run an application)
9. Seed the database:
php artisan db:seed
(located in /database/seeders, it will populate the database with test data)
10. [Optional] How to start Laravel development server:
php artisan serve
(check created URL with APP_URL value in .env file)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

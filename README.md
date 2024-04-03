<<<<<<< HEAD
# craftedby-project
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 5706340 (Initial commit)
>>>>>>> 
<text align="center">

# - CraftedBy -
**backend-API-project**

<br/>

<p align="center">
<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="laravel">
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="php">
<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="mysql">
</p>
<br/>

Development of an API for e-commerce website designed to present and sell craft products.

</text>

<br/>

**Specifics :**
- PHP Framework Laravel(v.10)
- Space dedicated to artists/craftspeople to present their profiles and creations
- Artisans can manage their own accounts and update their creations
- Advanced search functions, such as searching by material, category or style
- Intuitive shopping cart with customisation options for products

- Respect safety criteria
- Minimise carbon impact

<br/>

**Initialisation :** 

- Installing php composer

Project creation : 
````
composer create-project laravel/laravel:^10.0 example-app
````
- Create your database and configure the connection in the ".env" file

Starting the server  : 
````
php artisan serve
````
<br/>

**Debugbar / IDE helper :** 

Debugbar :
```` 
composer require barryvdh/laravel-debugbar --dev
````
IDE helper :
```` 
composer require --dev barryvdh/laravel-ide-helper
````
<br/>

**Migration Generations, Models, Factories & Seeders :** 

````
php artisan make:migration create_examples_table
````
````
php artisan make:model Example
````
````
php artisan make:factory ExampleFactory
````
````
php artisan make:seeder ExampleSeeder
````
Run migration : 
````
php artisan migrate
````
Fresh if modifications : 
````
php artisan migrate:fresh
````
Run seeders : 
````
php artisan db:seed
````
Run migration & seeder : 
````
php artisan migrate:fresh --seed
````
Option of generating seeders in the same class (DatabaseSeeder) or creating several classes (ExampleSeeder)
which will be called in DatabaseSeeder

<br/>

**Controllers & CRUD :** 

Simple controller :
````
php artisan make:controller ExampleController
````
Controller with associated CRUD functions and model specification :
````
php artisan make:controller ExampleController --model=Example --resource
````

**Resources :** 

Enable you to display only certain attributes and expressively transform
our models and model collections into JSON
````
php artisan make:ressource ExampleResource 
````
````
php artisan make:resource Example --collection 
````
<br/>

**Auth & policies :** 

Laravel Sanctum : 
````
composer require laravel/sanctum 
````
````
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
````
````
php artisan migrate 
````

<br/>

Use "HasApiToken" in the User model
Create the controller : (user creation/connection management)
````
php artisan make:controller Api\\AuthController
````
Protect the API with authentication using the auth:sanctum middleware :
````
Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');
````
<br/>

Generate Policies :
````
php artisan make:policy ExamplePolicy 
````
````
php artisan make:policy ExamplePolicy --model=Example  
````
Policy Methods > Controller Methods (called immediately before the controller methods are executed) :
- viewAny > index
- view > show
- create > store (or create)
- update > edit (or update)
- delete > destroy

<br/>

**Documentation :** 

- https://laravel.com/docs/10.x/readme 
- https://cours.brosseau.ovh/cheatsheets/laravel/quick.html
- https://laravel.com/docs/10.x/controllers
- https://laravel.com/docs/11.x/eloquent-collections



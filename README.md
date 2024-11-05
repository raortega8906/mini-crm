<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Mini-CRM

This project is designed to manage companies and their employees through an admin panel. It is based on a blog post from Laravel Daily, [How to Test Junior Laravel Developer Skills: Sample Project](http://laraveldaily.com/test-junior-laravel-developer-sample-project), and serves as a sample project for junior Laravel developers.

### Objectives
* [x] Basic Laravel authentication: ability to log in as an admin.
* [x] Use database seeds to create the first user with the email `admin@admin.com` and password `password`.
* [x] CRUD (Create / Read / Update / Delete) functionality for two entities: Companies and Employees.
* [x] The Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website.
* [x] The Employees DB table consists of these fields: First Name (required), Last Name (required), company (foreign key to companies), email, phone.
* [x] Use DB migrations to create the above schemas.
* [x] Store company logos in the `storage/app/public` folder and make them publicly accessible.
* [x] Use basic Laravel resource controllers with default methods: index, create, store, etc.
* [x] Use Laravel’s validation function, using request classes.
* [x] Use Laravel pagination to display the list of Companies/Employees, 10 entries per page.
* [x] Use Laravel/UI with a default Bootstrap-based design theme, but remove the registration ability.

#### Additional Goals
* [ ] Use the Datatables.net library to display the table, without server-side rendering.
* [x] Use a more complex front-end theme like AdminLTE.
* [x] Email notification: send an email each time a new company is added (use Mailgun or Mailtrap).
* [ ] Make the project multi-language (using the `resources/lang` folder).
* [x] Basic testing with phpunit.

## Installation
To run this project, you need PHP, MySQL, Apache, or Nginx installed. For more information, see the [Laravel recommendations](https://laravel.com/docs/8.x).

### Steps:
1. Clone the repository: `git clone https://github.com/raortega8906/mini-crm.git`
2. `$ cd Mini-CRM`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create a database in **MySQL** or **SQLite**
7. Add database credentials in the `.env` file
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Log in with:
    - email: `admin@admin.com`
    - password: `password`

## Live Demo
https://minicrm.wpcache.es/

## License
This project is open-source.

## Next Steps
You can now start using Mini-CRM freely.

